<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;


class ApprenticeController extends Controller
{
    public function create(){

        $courses=Course::all();
        $computers=Computer::all();
        return view('apprentice.admin',compact('courses','computers'));
    }

    public function index(){

        $apprentices = Apprentice::all();

        return view('apprentice.index', compact('apprentices'));

    }
    
    public function admin(Request $request){

        return Apprentice::create($request->all());

    }

    public function show ($id){

        $apprentice=Apprentice::find($id);

        return view('apprentice.show',compact('apprentice'));
        
    }

    public function edit(Apprentice $apprentice){

        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.edit', compact('apprentice','courses','computers'));
    }

    public function update(Request $request, Apprentice $apprentice){

        $apprentice->update($request->all());

        return redirect()->route('apprentice.index');

    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return redirect()->route('apprentice.index');
    }
}