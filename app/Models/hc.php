<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hc extends Model
{
    protected $table = "health_certificate";

    protected $PrimaryKey = "id";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}