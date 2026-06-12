<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function create(){

        return view('trainingcenter.create');

    }

    public function center(Request $request){

    return $request;

    }
}
