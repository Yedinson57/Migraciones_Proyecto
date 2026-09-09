<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // Relacion uno a Muchos (inversa)
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    // Relacion Uno a Muchos
    public function offers(){
        return $this->hasMany('App\Models\Offer');
    }

    protected $fillable = [
        'name',
        'description',
        'type',
        'duration',
        'area_id',
    ];
}
