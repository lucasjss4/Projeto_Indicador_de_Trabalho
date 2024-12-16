<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['email'];

    public function projecJobs(){
        return $this->belongsToMany(ProjectJob::class)->withTimestamps();
    }

    public function competences(){
        return $this->belongsToMany(Competence::class)->withTimestamps()->withPivot('level_id', 'project_job_id');
    }
}
