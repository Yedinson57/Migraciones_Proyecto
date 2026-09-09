<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

    // Relacion uno a Muchos (inversa)
    public function offer(){
        return $this->belongsTo('App\Models\Offer');
    }

    // Relacion Uno a Muchos
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

    protected $fillable = [
        'code',
        'start_date',
        'schedule',
        'offer_id',
    ];
}
