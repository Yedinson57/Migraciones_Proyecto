<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    // Relacion de uno a uno
    public function computer()
    {
        return $this->belongsTo('App\Models\Computer');
    }
    
    // Relacion uno a Uno
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
