<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    //  Relacion Uno A Uno creo una funcion de apunte a Apprentice
    public function apprentice(){
        return $this->hasOne('App\Models\Apprentice');
    }
}
