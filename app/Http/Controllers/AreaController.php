<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function create(){

        return view('area.create');

    }

    public function category (Request $request){

    return $request;

    }
}
