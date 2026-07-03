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

    public function index(){

        $teachers = Teacher::all();

        return view('teacher.index', compact('teachers'));

    }

    
    public function admin(Request $request){

        return Teacher::create($request->all());

    }

    public function show ($id){

        $teacher=Teacher::find($id);

        return view('teacher.show',compact('teacher'));
        
    }
}