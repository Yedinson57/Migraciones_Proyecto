<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Environment;
use App\Models\Training_center;

class EnvironmentController extends Controller
{
    public function create(){

        $training_centers=Training_center::all();
        return view('environment.create',compact('training_centers'));

    }

    public function index(){

        // $environments = Environment::all();
        // return view('environment.index', compact('environments'));

        $environments = Environment::all();
        return response()->json($environments);
    }

    
    public function store(Request $request){

        // $environments = Environment::create($request->all());

        $environments = Environment::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $environments->urlFoto = $nombreArchivo;
        $environments->save();

        // return redirect()->route('environment.index');
        
        return response()->json($environments);
    }

    public function show ($id){

        // $environments=Environment::find($id);

        // return view('environment.show',compact('environments'));

        $environments = Environment::findOrFail($id);
        return response()->json($environments);
    }

    public function edit(Environment $environments){

        $trainingcenters = Training_center::all();

        return view('environment.edit', compact('environments','trainingcenters'));
    }

    public function update(Request $request, Environment $environment){

        // $environments->update($request->all());
        // return redirect()->route('environment.index');

        $environment->update($request->all());
        return response()->json($environment);
    }

    public function destroy(Environment $environment)
    {
        // $environments->delete();
        // return redirect()->route('environment.index');

        $environment->delete();
        return response()->json($environment);
    }
}