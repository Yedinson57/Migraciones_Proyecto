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

        $teacher = Teacher::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $teacher->urlFoto = $nombreArchivo;
        $teacher->save();

        return redirect()->route('teacher.index');

    }

    public function show ($id){

        $teacher=Teacher::find($id);

        return view('teacher.show',compact('teacher'));
        
    }

    public function edit(Teacher $teacher){

        $areas = Area::all();
        $trainingcenters = Training_center::all();

        return view('teacher.edit', compact('teacher', 'areas', 'trainingcenters'));
    }

    public function update(Request $request, Teacher $teacher){

        $teacher->update($request->all());

        return redirect()->route('teacher.index');

    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}