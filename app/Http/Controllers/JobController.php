<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Competence;
use App\Models\Level;
use App\Models\ProjectJob;
use Closure;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class JobController extends Controller
{
    public function index(){

        $jobs = ProjectJob::all();
        $levels = Level::all();

        return view('job.index', compact('jobs', 'levels'));
    }

    public function list(){

        $jobs = ProjectJob::all();
        $levels = Level::all();

        return view('job.list', compact('jobs', 'levels'));

    }

    public function create(){
        $levels = Level::all();
        return view('job.create', compact('levels'));
    }

    public function search(Request $request){
        $request->validate([
            'email' => ['required']
        ]);

        $candidate = Candidate::where('email', $request->email)->first();

        if(isset($candidate)){
            $jobs = ProjectJob::all();
            $levels = Level::all();

            return view('job.index', compact('jobs', 'levels', 'candidate'));
        }
    }

    public function saveApplication(Request $request){
        $request->validate([
            'email' => ['required'],
            'name' => ['required'],
            'phone' => ['required'],
            'competences[]' => ['nullable']
        ]);

        if($request->has('search')){
            $candidate = Candidate::where('email', $request->email)->first();

            if(isset($candidate)){
                $jobs = ProjectJob::all();
                $levels = Level::all();

                return view('job.index', compact('jobs', 'levels', 'candidate'));
            }
        }

        $candidate = Candidate::firstOrNew(
            ['email' => $request->email],
            ['name' => $request->name, 'phone' => $request->phone]
        );

        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone = $request->phone;
        $candidate->save();

        $candidate->projecJobs()->sync($request->job);

        $candidate->competences()->where('project_job_id', $request->job)->detach();

        foreach($request->competences as $competenceId => $competenceValue){
            $candidate->competences()->attach($competenceId, ['level_id' => $competenceValue ? $competenceValue : 0, 'project_job_id' => $request->job]);
        }

        return redirect()->route('index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'heights' => function (string $attribute, mixed $value, Closure $fail){
                if(array_sum($value) != 100){
                    $fail("A soma dos pesos deve ser 100");
                }
            },
        ]);

        $job = new ProjectJob();
        $job->job = $request->name;
        $job->save();

        $heights = $request->heights;
        foreach($request->competence as $key => $competenceValue){
            if($competenceValue){
                $competence = new Competence();
                $competence->competence = $competenceValue;
                $competence->height = $heights[$key];
                $competence->projectJob()->associate($job);
                $competence->save();
            }
        }

        return redirect()->route('job.list');
    }
}
