<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    protected $table = 'documents';

    protected $fillable = [
        'user_id',
        'matric',
        'inter', 
        'diploma',
        'specialization',
        'pnc',
        'experience',
        'other',
        'domicile',
        'prc',
        'cnic',
        'fcnic',
        'passport'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}