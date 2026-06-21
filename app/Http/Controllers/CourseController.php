<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Course;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function create(){

    $areas=Area::all();
    $training_centers=Training_center::all();
        return view('course.admin',compact('areas','training_centers'));
    }
    
    public function admin(Request $request){

        Course::create($request->all());

    }
}
