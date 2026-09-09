<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
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

    // Relacion uno a Muchos
    public function environments(){
        return $this->hasMany('App\Models\Environment');
    }

    // Relacion Uno a Muchos
    public function advertisements(){
        return $this->hasMany('App\Models\Advertisement');
    }

    protected $fillable = [
        'name',
        'location'
    ];

    protected $guarded = [
        'urlFoto'
    ];
}
