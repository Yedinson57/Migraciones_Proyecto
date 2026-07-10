<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function create(){

        return view('computer.create');

    }

    public function index(){

        $computers = Computer::all();

        return view('computer.index', compact('computers'));

    }

    public function admin(Request $request){

        return Computer::create($request->all());

    }

    public function show ($id){

        $computer=Computer::find($id);

        return view('computer.show',compact('computer'));
        
    }

    public function edit(Computer $computer){

        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer){

        $computer->update($request->all());

        return redirect()->route('computer.index');

    }
}
