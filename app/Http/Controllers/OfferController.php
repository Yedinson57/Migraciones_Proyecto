<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Program;

class OfferController extends Controller
{
    public function create(){

        $programs=Program::all();
        return view('offer.create',compact('programs'));

    }

    public function index(){

        $offers = Offer::all();

        return view('offer.index', compact('offers'));

    }

    
    public function admin(Request $request){

        $offers = Offer::create($request->all());
        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $offers->urlFoto = $nombreArchivo;
        $offers->save();

        return redirect()->route('offer.index');

    }

    public function show ($id){

        $offers=Offer::find($id);

        return view('offer.show',compact('offers'));
        
    }

    public function edit(Offer $offers){

        $programs = Program::all();

        return view('offer.edit', compact('offers', 'programs'));
    }

    public function update(Request $request, Offer $offers){

        $offers->update($request->all());

        return redirect()->route('offer.index');

    }

    public function destroy(Offer $offers)
    {
        $offers->delete();
        return redirect()->route('offer.index');
    }
}
