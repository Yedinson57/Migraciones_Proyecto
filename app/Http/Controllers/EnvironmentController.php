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

        $environments = Environment::all();

        return view('environment.index', compact('environments'));

    }

    
    public function admin(Request $request){

        $environment = Environment::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $environment->urlFoto = $nombreArchivo;
        $environment->save();

        return redirect()->route('environment.index');

    }

    public function show ($id){

        $environments=Environment::find($id);

        return view('environment.show',compact('environments'));
        
    }

    public function edit(Environment $environments){

        $trainingcenters = Training_center::all();

        return view('environment.edit', compact('environments','trainingcenters'));
    }

    public function update(Request $request, Environment $environments){

        $environments->update($request->all());

        return redirect()->route('environment.index');

    }

    public function destroy(Environment $environments)
    {
        $environments->delete();
        return redirect()->route('environment.index');
    }
}