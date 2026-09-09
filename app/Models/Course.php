<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Relacion uno a Muchos (inversa)
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

    // Relacion uno a Muchos (inversa)
    public function cohort(){
        return $this->belongsTo('App\Models\Cohort');
    }

    protected $fillable = [
        'course_number',
        'day',
        'training_center_id',
        'cohort_id',
        'environment_id',
    ];

    protected $guarded = [
        'urlFoto'
    ];
}
