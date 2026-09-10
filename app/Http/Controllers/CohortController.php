<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cohort;
use App\Models\Offer;

class CohortController extends Controller
{
    public function create(){

        $offers=Offer::all();
        return view('cohort.create',compact('offers'));

    }

    public function index(){

        $cohorts = Cohort::all();

        return view('cohort.index', compact('cohorts'));

    }

    
    public function admin(Request $request){

        Cohort::create($request->all());
        
        return redirect()->route('cohort.index');

    }

    public function show ($id){

        $cohorts=Cohort::find($id);

        return view('cohort.show',compact('cohorts'));
        
    }

    public function edit(Cohort $cohorts){

        $offers = Offer::all();

        return view('cohort.edit', compact('cohorts', 'offers'));
    }

    public function update(Request $request, Cohort $cohorts){

        $cohorts->update($request->all());

        return redirect()->route('cohort.index');

    }

    public function destroy(Cohort $cohorts)
    {
        $cohorts->delete();
        return redirect()->route('cohort.index');
    }
}
