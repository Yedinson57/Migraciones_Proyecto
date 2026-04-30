<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }

    // Relacion Uno a Muchos
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
