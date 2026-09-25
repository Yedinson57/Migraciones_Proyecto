<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Environment;

class ComputerController extends Controller
{
    public function create(){

        $environments=Environment::all();
        return view('computer.create',compact('environments'));

    }

    public function index(){

        $computers = Computer::all();

        return response()->json($computers);

        // return view('computer.index', compact('computers'));

    }

    public function store(Request $request){

        $request->validate([
            'number' => 'required|max:255'
        ]);

        $computers = Computer::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $computers->urlFoto = $nombreArchivo;
        $computers->save();

        // return redirect()->route('computer.index');

        return response()->json($computers);

    }

    public function show ($id){

        $computers = Computer::findOrFail($id);
        // $category = Category::with(['posts.user'])->findOrFail($id);
        // $category = Category::with(['posts'])->findOrFail($id);
        return response()->json($computers);

        // $computer=Computer::find($id);

        // return view('computer.show',compact('computer'));
        
    }

    public function edit(Computer $computer){

        $environments=Environment::all();

        return view('computer.edit', compact('computer','environments'));
    }

    public function update(Request $request, Computer $computer){

        // $computer->update($request->all());

        // return redirect()->route('computer.index');

        $request->validate([
            'name' => 'required|max:255',
            ]);

        $computer->update($request->all());

        return $computer;

    }

    public function destroy(Computer $computer)
    {
        // $computer->delete();
        // return redirect()->route('computer.index');

        $computer->delete();
        return $computer;
    }
}
