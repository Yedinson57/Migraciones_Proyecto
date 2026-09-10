<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Training_center;
use App\Models\Cohort;
use App\Models\Environment;

class CourseController extends Controller
{
    public function create(){

        $training_centers=Training_center::all();
        $cohorts=Cohort::all();
        $environments=Environment::all();

        return view('course.create',compact('training_centers','cohorts','environments'));
    }

    public function index(){

        $courses = Course::all();

        return view('course.index', compact('courses'));

    }
    
    public function admin(Request $request){

        $course = Course::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $course->urlFoto = $nombreArchivo;
        $course->save();

        return redirect()->route('course.index');

    }

    public function show ($id){

        $course=Course::find($id);

        return view('course.show',compact('course'));
        
    }

    public function edit(Course $course){

        $trainingcenters=Training_center::all();
        $cohorts=Cohort::all();
        $environments=Environment::all();

        return view('course.edit', compact('course','trainingcenters','cohorts','environments'));
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
