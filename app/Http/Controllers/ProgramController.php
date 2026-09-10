<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Area;

class ProgramController extends Controller
{
    public function create(){

    $areas=Area::all();
        return view('program.create',compact('areas'));

    }

    public function index(){

        $programs = Program::all();

        return view('program.index', compact('programs'));

    }

    
    public function admin(Request $request){

        $programs = Program::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $programs->urlFoto = $nombreArchivo;
        $programs->save();

        return redirect()->route('program.index');

    }

    public function show ($id){

        $programs=Program::find($id);

        return view('program.show',compact('programs'));
        
    }

    public function edit(Program $programs){

        $areas = Area::all();

        return view('program.edit', compact('programs', 'areas'));
    }

    public function update(Request $request, Program $programs){

        $programs->update($request->all());

        return redirect()->route('program.index');

    }

    public function destroy(program $programs)
    {
        $programs->delete();
        return redirect()->route('program.index');
    }
}
