<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Indicator</title>

    <!-- Bootstrap core CSS -->
    @vite(["resources/css/bootstrap.min.css"])

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">Job Indicator</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('job.create')}}" class="nav-link active" aria-current="page">New Job</a></li>
            </ul>

        </header>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample">

                    @foreach ($jobs as $job )
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $job->id }}" aria-expanded="false" aria-controls="collapse{{$job->id}}">
                                {{ $job->job }}
                            </button>
                        </h2>
                        <div id="collapse{{$job->id}}" class="accordion-collapse collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @foreach ($job->candidates as $candidate )
                                    @php
                                        $soma = 0;
                                        foreach($candidate->competences()->where('candidate_competence.project_job_id', $job->id)->get() as $competence){
                                            
                                            $factor = 0;

                                            if($competence->pivot->level_id == 1){
                                                $factor = 0.00;
                                            }else if($competence->pivot->level_id == 2){
                                                $factor = 0.33;
                                            }else if($competence->pivot->level_id == 3){
                                                $factor = 0.66;
                                            }else{
                                                $factor = 1.00;
                                            }
                                            
                                            $soma += $competence->height * $factor;
                                        }
                                    @endphp
                                    
                                    <div class="accordion" id="accordionExample-{{$job->id}}-{{$candidate->id}}">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$job->id}}-{{$candidate->id}}" aria-expanded="false" aria-controls="#collapse-{{$job->id}}-{{$candidate->id}}">
                                                    {{$candidate->name}} <span style="position: absolute;right:60px;">{{$soma}}</span>
                                                </button>
                                            </h2>
                                            <div id="collapse-{{$job->id}}-{{$candidate->id}}" class="accordion-collapse collapse" data-bs-parent="accordionExample-{{$job->id}}-{{$candidate->id}}">
                                                <div class="accordion-body">
                                                    <p>Email: {{$candidate->email}}</p>
                                                    <p>Telefone: {{$candidate->phone}}</p>
                                                    <h2>Competence Leavels</h2>
                                                    @foreach ($candidate->competences()->where('candidate_competence.project_job_id', $job->id)->get() as $competence )
                                                        <p style="display: flex; justify-content: space-between; align-items: center; width: 800px;">
                                                            <span>{{$competence->competence}}</span>
                                                            <span>
                                                                {{$competence->pivot->level_id == 1 ? 'No knowledge' : ($competence->pivot->level_id == 2 ? 'Beginner' : ($competence->pivot->level_id == 3 ? 'Full' : 'Expert'))}}
                                                            </span>
                                                        </p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</head>

<body>


    @vite(["resources/js/bootstrap.bundle.min.js"])
</body>

</html>