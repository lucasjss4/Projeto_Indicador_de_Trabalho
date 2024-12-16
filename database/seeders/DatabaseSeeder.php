<?php

namespace Database\Seeders;

use App\Models\Competence;
use App\Models\Level;
use App\Models\ProjectJob;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ProjectJob::create([
            'job' => 'Web Designer'
        ]);

        ProjectJob::create([
            'job' => 'Data Base Administrator'
        ]);

        Level::create([
            'level' => 'No knowledge',
            'factor' => '0.00',
        ]);
    
        Level::create([
            'level' => 'Beginner',
            'factor' => '0.33',
        ]);

        Level::create([
            'level' => 'Full',
            'factor' => '0.66',
        ]);

        Level::create([
            'level' => 'Expert',
            'factor' => '1.00',
        ]);

        Competence::create([
            'competence' => 'HTML',
            'height' => '10',
            'project_job_id' => '1'
        ]);

        Competence::create([
            'competence' => 'CSS',
            'height' => '10',
            'project_job_id' => '1'
        ]);

        Competence::create([
            'competence' => 'JavaScript',
            'height' => '20',
            'project_job_id' => '1'
        ]);

        Competence::create([
            'competence' => 'Angular framework',
            'height' => '30',
            'project_job_id' => '1'
        ]);

        Competence::create([
            'competence' => 'Automated Tests',
            'height' => '20',
            'project_job_id' => '1'
        ]);

        Competence::create([
            'competence' => 'Work in groups',
            'height' => '5',
            'project_job_id' => '1'
        ]);

        Competence::create([
            'competence' => 'Work with Agile Methods',
            'height' => '5',
            'project_job_id' => '1'
        ]);

        Competence::create([
            'competence' => 'SQL Language',
            'height' => '30',
            'project_job_id' => '2'
        ]);

        Competence::create([
            'competence' => 'Microsoft SQL Server',
            'height' => '10',
            'project_job_id' => '2'
        ]);

        Competence::create([
            'competence' => 'Oracle',
            'height' => '50',
            'project_job_id' => '2'
        ]);

        Competence::create([
            'competence' => 'MySQL',
            'height' => '10',
            'project_job_id' => '2'
        ]);


    }
}
