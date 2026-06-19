<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    public function create(){

        return view('teacher.create');
        $areas=Area::all();
        $trainingcenter=Training_center::all();
        return view('teacher.create',compact('areas'));
        return view('teacher.create',compact('training_centers'));

    }

    public function admin(Request $request){

     Teacher::create($request->all());

    }
}
