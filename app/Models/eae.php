<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eae extends Model
{
    protected $table = 'education';
    protected $fillable = [
        'user_id',
        'education_academic_degrees',
        'practical_work_experiences',
    ];

    protected $casts = [
        'education_academic_degrees' => 'array',
        'practical_work_experiences' => 'array',
    ];
}