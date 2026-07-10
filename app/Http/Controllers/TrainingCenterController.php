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

        return Training_center::create($request->all());

    }

    public function show ($id){

        $trainingcenter=Training_center::find($id);

        return view('trainingcenter.show',compact('trainingcenter'));
        
    }

    public function edit(Training_center $trainingcenter){

        return view('trainingcenter.edit', compact('trainingcenter'));
    }

    public function update(Request $request, Area $area){

        $trainingcenter->update($request->all());

        return redirect()->route('trainingcenter.index');

    }
}
