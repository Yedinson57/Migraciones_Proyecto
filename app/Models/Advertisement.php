<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    // Relacion uno a Muchos (inversa)
    public function training_center(){
        return $this->belongsTo('App\Models\Training_center');
    }

    protected $fillable = [
        'title',
        'category',
        'publish_date',
        'author',
        'summary',
        'content',
        'training_center_id'
    ];

    protected $guarded = [
        'urlFoto'
    ];
}
