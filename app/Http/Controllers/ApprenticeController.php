<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;


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
}