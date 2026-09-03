<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function create(){

        return view('trainingcenter.create');

    }

    public function index(){

        $trainingcenters = Training_center::all();

        return view('trainingcenter.index', compact('trainingcenters'));

    }

    public function admin(Request $request){

        $trainingcenters = Training_center::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $trainingcenters->urlFoto = $nombreArchivo;
        $trainingcenters->save();

        return redirect()->route('trainingcenter.index');

    }

    public function show ($id){

        $trainingcenter=Training_center::find($id);

        return view('trainingcenter.show',compact('trainingcenter'));
        
    }

    public function edit(Training_center $trainingcenter){

        return view('trainingcenter.edit', compact('trainingcenter'));
    }

    public function update(Request $request, Training_center $trainingcenter){

        $trainingcenter->update($request->all());

        return redirect()->route('trainingcenter.index');

    }

    public function destroy(Training_center $trainingcenter)
    {
        $trainingcenter->delete();
        return redirect()->route('trainingcenter.index');
    }
}
