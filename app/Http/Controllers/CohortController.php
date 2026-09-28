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

        // $cohorts = Cohort::all();
        // return view('cohort.index', compact('cohorts'));

        $cohorts = Cohort::all();
        return response()->json($cohorts);

    }

    
    public function store(Request $request){

        // Cohort::create($request->all());
        // return redirect()->route('cohort.index');

        $cohorts = Cohort::create($request->all());
        return response()->json($cohorts);

    }

    public function show ($id){

        // $cohorts=Cohort::find($id);
        // return view('cohort.show',compact('cohorts'));

        $cohorts = Cohort::findOrFail($id);
        return response()->json($cohorts);
    }

    public function edit(Cohort $cohorts){

        $offers = Offer::all();
        return view('cohort.edit', compact('cohorts', 'offers'));
    }

    public function update(Request $request, Cohort $cohort){

        // $cohorts->update($request->all());
        // return redirect()->route('cohort.index');

        $cohort->update($request->all());
        return response()->json($cohort);
    }

    public function destroy(Cohort $cohort)
    {
        // $cohorts->delete();
        // return redirect()->route('cohort.index');

        $cohort->delete();
        return response()->json($cohort);
    }
}
