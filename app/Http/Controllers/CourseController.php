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

    public function index(){

        $courses = Course::all();

        return view('course.index', compact('courses'));

    }
    
    public function admin(Request $request){

        return Course::create($request->all());

    }

    public function show ($id){

        $course=Course::find($id);

        return view('course.show',compact('course'));
        
    }

    public function edit(Course $course){

        $areas = Area::all();
        $trainingcenters = Training_center::all();

        return view('course.edit', compact('course','areas','trainingcenters'));
    }

    public function update(Request $request, Course $course){

        $course->update($request->all());

        return redirect()->route('course.index');

    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
