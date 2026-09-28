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

        // $advertisements = Advertisement::all();

        // return view('advertisement.index', compact('advertisements'));

        $advertisements = Advertisement::all();

        return response()->json($advertisements);

    }

    
    public function store(Request $request){

        // $advertisements = Advertisement::create($request->all());

        $advertisements = Advertisement::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $advertisements->urlFoto = $nombreArchivo;
        $advertisements->save();

        // return redirect()->route('advertisement.index');

        return response()->json($advertisements);

    }

    public function show ($id){

        // $advertisements=Advertisement::find($id);

        // return view('advertisement.show',compact('advertisements'));

        $advertisements = Advertisement::findOrFail($id);
        return response()->json($advertisements);
        
    }

    public function edit(Advertisement $advertisements){

        $trainingcenters = Training_center::all();

        return view('advertisement.edit', compact('advertisements','trainingcenters'));
    }

    public function update(Request $request, Advertisement $advertisement){

        // $advertisements->update($request->all());
        // return redirect()->route('advertisement.index');

        $advertisement->update($request->all());
        return response()->json($advertisement);
    }

    public function destroy(Advertisement $advertisement)
    {
        // $advertisements->delete();
        // return redirect()->route('advertisement.index');

        $advertisement->delete();
        return response()->json($advertisement);
    }
}
