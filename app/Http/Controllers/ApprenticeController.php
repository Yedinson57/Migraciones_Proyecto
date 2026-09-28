<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;


class ApprenticeController extends Controller
{
    public function create(){

        $courses=Course::all();
        $computers=Computer::all();
        
        return view('apprentice.create',compact('courses','computers'));
    }

    public function index(){

        // $apprentices = Apprentice::all();

        // return view('apprentice.index', compact('apprentices'));

        $apprentices = Apprentice::all();

        return response()->json($apprentices);

    }
    
    public function store(Request $request){

        // $apprentice = Apprentice::create($request->all());

        $apprentices = Apprentice::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $apprentices->urlFoto = $nombreArchivo;
        $apprentices->save();

        // return redirect()->route('apprentice.index');

        return response()->json($apprentices);

    }

    public function show ($id){

        // $apprentice=Apprentice::find($id);

        // return view('apprentice.show',compact('apprentice'));

        $apprentices = Apprentice::findOrFail($id);
        return response()->json($apprentices);
        
    }

    public function edit(Apprentice $apprentice){

        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.edit', compact('apprentice','courses','computers'));
    }

    public function update(Request $request, Apprentice $apprentice){

        // $apprentice->update($request->all());

        // return redirect()->route('apprentice.index');

        $apprentice->update($request->all());
        return response()->json($apprentice);

    }

    public function destroy(Apprentice $apprentice)
    {
        // $apprentice->delete();
        // return redirect()->route('apprentice.index');

        $apprentice->delete();
        return response()->json($apprentice);
    }
}