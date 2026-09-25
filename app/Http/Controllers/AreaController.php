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

        // $areas = Area::all();

        // return view('area.index',compact('areas'));

        $areas = Area::all();

        return response()->json($areas);

    }

    public function store(Request $request){

        // $areas = Area::create($request->all());

        $request->validate([
            'name' => 'required|max:255',
        ]);
        $areas = Area::create($request->all());

        
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $areas->urlFoto = $nombreArchivo;
        $areas->save();

        // return redirect()->route('area.index');

        return response()->json($areas);

    }

    public function show ($id){

        $areas = Area::findOrFail($id);
        // $area = Area::with(['posts.user'])->findOrFail($id);
        // $area = Area::with(['posts'])->findOrFail($id);
        return response()->json($areas);

        // $area=Area::find($id);

        // return view('area.show',compact('area'));
        
    }

    public function edit(Area $area){

        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area){

        // $area->update($request -> all());

        // return redirect()->route('area.index');

        $request->validate([
            'name' => 'required|max:255',
            ]);

        $area->update($request->all());

        return $area;

    }

    public function destroy(Area $area)
    {
        // $area->delete();
        // return redirect()->route('area.index');

        $area->delete();
        return $area;
    }

    
}
