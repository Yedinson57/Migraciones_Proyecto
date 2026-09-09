<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    // Relacion uno a Muchos (inversa)
    public function program(){
        return $this->belongsTo('App\Models\Program');
    }

    // Relacion Uno a Muchos
    public function cohorts(){
        return $this->hasMany('App\Models\Cohort');
    }

    protected $fillable = [
        'day',
        'registration_date',
        'capacity',
        'program_id',
    ];
}
