<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function create(){

        return view('computer.create');

    }

    public function index(){

        $computers = Computer::all();

        return view('computer.index', compact('computers'));

    }

    public function admin(Request $request){

        $computer = Computer::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $computer->urlFoto = $nombreArchivo;
        $computer->save();

        return redirect()->route('computer.index');

    }

    public function show ($id){

        $computer=Computer::find($id);

        return view('computer.show',compact('computer'));
        
    }

    public function edit(Computer $computer){

        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer){

        $computer->update($request->all());

        return redirect()->route('computer.index');

    }

    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
