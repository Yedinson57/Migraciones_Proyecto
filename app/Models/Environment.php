<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;

    // Relacion uno a Muchos (inversa)
    public function training_center(){
        return $this->belongsTo('App\Models\Training_center');
    }

    // Relacion Uno a Muchos
    public function computers(){
        return $this->hasMany('App\Models\Computer');
    }

    protected $fillable = [
        'name',
        'location',
        'training_center_id',
    ];

    protected $guarded = [
        'urlFoto'
    ];
}