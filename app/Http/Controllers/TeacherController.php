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
        
        return view('teacher.create',compact('areas','training_centers'));

    }

    public function index(){

        // $teachers = Teacher::all();
        // return view('teacher.index', compact('teachers'));

        $teachers = Teacher::all();
        return response()->json($teachers);
    }

    
    public function store(Request $request){

        // $teacher = Teacher::create($request->all());

        $teachers = Teacher::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $teachers->urlFoto = $nombreArchivo;
        $teachers->save();

        // return redirect()->route('teacher.index');

        return response()->json($teachers);
    }

    public function show ($id){

        // $teacher=Teacher::find($id);
        // return view('teacher.show',compact('teacher'));

        $teachers = Teacher::findOrFail($id);
        return response()->json($teachers);
    }

    public function edit(Teacher $teacher){

        $areas = Area::all();
        $trainingcenters = Training_center::all();

        return view('teacher.edit', compact('teacher', 'areas', 'trainingcenters'));
    }

    public function update(Request $request, Teacher $teacher){

        // $teacher->update($request->all());
        // return redirect()->route('teacher.index');

        $teacher->update($request->all());
        return response()->json($teacher);
    }

    public function destroy(Teacher $teacher)
    {
        // $teacher->delete();
        // return redirect()->route('teacher.index');

        $teacher->delete();
        return response()->json($teacher);
    }
}