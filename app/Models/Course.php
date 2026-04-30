<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Relacion uno a Uno
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    // Relacion uno a Uno
    public function training_center(){
        return $this->belongsTo('App\Models\Training_center');
    }

    // Relacion uno a Muchos
    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }
    
    // Relacion Muchos a muchos
    public function teachers(){
        return $this->belongsToMany('App\Models\Teacher');
    }
}
