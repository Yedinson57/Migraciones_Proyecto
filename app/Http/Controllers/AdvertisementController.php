<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Training_center;

class AdvertisementController extends Controller
{
    public function create(){

        $training_centers=Training_center::all();
        return view('advertisement.create',compact('training_centers'));

    }

    public function index(){

        $advertisements = Advertisement::all();

        return view('advertisement.index', compact('advertisements'));

    }

    
    public function admin(Request $request){

        Advertisement::create($request->all());
        
        return redirect()->route('advertisement.index');

    }

    public function show ($id){

        $advertisements=Advertisement::find($id);

        return view('advertisement.show',compact('advertisements'));
        
    }

    public function edit(Advertisement $advertisements){

        $trainingcenters = Training_center::all();

        return view('advertisement.edit', compact('advertisements','trainingcenters'));
    }

    public function update(Request $request, Advertisement $advertisements){

        $advertisements->update($request->all());

        return redirect()->route('advertisement.index');

    }

    public function destroy(Advertisement $advertisements)
    {
        $advertisements->delete();
        return redirect()->route('advertisement.index');
    }
}
