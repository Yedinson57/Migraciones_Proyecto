<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    // Relacion uno a Muchos (inversa)
    public function environment(){
        return $this->belongsTo('App\Models\Environment');
    }

    //  Relacion Uno A Uno creo una funcion de apunte a Apprentice
    public function apprentice(){
        return $this->hasOne('App\Models\Apprentice');
    }

    protected $fillable = [
        'number',
        'brand',
        'environment_id'
    ];

    protected $guarded = [
        'urlFoto'
    ];
}
