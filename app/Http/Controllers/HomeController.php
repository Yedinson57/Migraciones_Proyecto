<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Advertisement;
use App\Models\Program;

class HomeController extends Controller
{
    public function index()
    {
        // Obtenemos los datos de la base de datos
        $offers = Offer::all(); 
        $advertisements = Advertisement::all();
        $programs = Program::all();

        // Pasamos las variables a la vista 'home'
        return view('home', compact('offers', 'advertisements', 'programs'));
    }
}