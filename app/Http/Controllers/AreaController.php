<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function create(){

        return view('area.create');

    }

    public function index(){

        $areas = Area::all();

        return view('area.index',compact('areas'));

    }

    public function admin(Request $request){

        return Area::create($request->all());

    }

    public function show ($id){

        $area=Area::find($id);

        return view('area.show',compact('area'));
        
    }

    public function edit(Area $area){

        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area){

        $area->update($request -> all());

        return redirect()->route('area.index');

    }

}
