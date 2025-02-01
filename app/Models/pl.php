<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pl extends Model
{
    protected $table = 'personal_information';
    protected $fillable = [
        'user_id',
        'program',
        'email',
        'Mobile',
        'Nameofapplicant',
        'FatherName',
        'Nationality',
        'dob',
        'cnic',
        'HomeAddress',
        'photoUpload',
        'JobStatus',
        'Religion',
        'Gender',
        'Marital',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}