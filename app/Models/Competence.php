<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    public function projectJob(){
        return $this->belongsTo(ProjectJob::class);
    }

    public function candidate(){
        return $this->belongsToMany(Candidate::class)->withTimestamps()->withPivot('level_id', 'project_job_id');
    }

    protected $fillable = ['competence', 'height'];
}
