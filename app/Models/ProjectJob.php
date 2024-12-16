<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectJob extends Model
{
    use HasFactory;

    public function competences(){
        return $this->hasMany(Competence::class);
    }

    public function candidates(){
        return $this->belongsToMany(Candidate::class);
    }

    protected $fillable = ['job'];

}

