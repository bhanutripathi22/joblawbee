<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobOpening;
use App\PracticeArea;
use App\PracticeAreaChild;
use App\State;
use App\Location;
use App\Company;

class SearchController extends Controller
{
    public function index(Request $request)
    {   
     
        $this->validate($request, [
            'q' => 'required|string'
        ]);
            
        // $job_openings = JobOpening::where('title', $request->q)->get();

        // $query = JobOpening::query();

        // if($request->has('q')){
        //     $query = $query->where('title', $request->q);
        // }
            
        // if($request->has('practice_area')){
        //     $query =$query->where('practice_area', $request->practice_area);
        // }

        // if ($request->has('minimum_experience')) {
        //     $query = $query->where('minimum_experience', $request->minimum_experience);
        // }

        // if ($request->has('location')) {
        //     $query = $query->where('location', $request->location);
        // }

        // if ($request->has('salary_range')) {
        //     $query = $query->where('salary', $request->salary_range);
        // }

        // $job_openings = $query->get();
        
        // $practice_areas = PracticeArea::all();
        // $states = State::all();

        // $practice_areas = PracticeArea::all();
        // $practice_area_children = PracticeAreaChild::all();
        //   $location = Location::all();


                $jobs = collect();


        $practice= PracticeArea::where('name','like', $request->q.'%')->get();
            $companies= Company::where('name', 'like', $request->q . '%')->get();
         
        // $combine = $combine->merge($companies->openings);
// return $practice;
// return $companies;

        foreach($practice as $practies){
            $combine = $practies->openings;
            $jobs =  $jobs->merge($combine);
        }


        foreach ($companies as $company) {
            $combine = $company->openings;
            $jobs =  $jobs->merge($combine);
        }
        // if($practice){

        //     $job_openings = JobOpening::where('practice_area', $practice->id)->get();
        // }
        // else{
        //     $job_openings = JobOpening::all();
        // }
// return $jobs;

        return view('search.index', compact('jobs'));
    }



    public function searchkeyword(Request $request)
    {
        $practice = PracticeArea::where('name','like', $request->keyword.'%')->get();
        return response()->json($practice);
    }
}
