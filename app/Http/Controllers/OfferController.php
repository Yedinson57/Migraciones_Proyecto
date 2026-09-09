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

        $offers = offer::all();

        return view('offer.index', compact('offers'));

    }

    
    public function admin(Request $request){

        offer::create($request->all());

        return redirect()->route('offer.index');

    }

    public function show ($id){

        $offers=offer::find($id);

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
