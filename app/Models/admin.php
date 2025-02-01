<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin_panel';
    protected $fillable = ['adminname', 'adminemail', 'adminpassword'];
}