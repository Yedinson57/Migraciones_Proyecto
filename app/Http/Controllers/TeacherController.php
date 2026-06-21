<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Teacher;
use App\Models\Training_center;

class TeacherController extends Controller
{
    public function create(){

    $areas=Area::all();
    $training_centers=Training_center::all();
        return view('teacher.admin',compact('areas','training_centers'));

    }
    
    public function admin(Request $request){

        Teacher::create($request->all());

    }
}