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
    
    public function admin(Request $request){

        Apprentice::create($request->all());

    }
}