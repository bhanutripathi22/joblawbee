<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

use App\JobOpening;
use App\PracticeArea;
use App\Location;

class WelcomeController extends Controller
{
    public function index()
    {
        $job_openings = JobOpening::where('type', 'full_time')->where('status', 1)->latest()->take(5)->get();
         $job_opening_part = JobOpening::where('status', 1)->where('type','part_time')->latest()->take(5)->get();
           $job_openings_home = JobOpening::where('status', 1)->where('type','work_from_home')->latest()->take(5)->get();

           $location = Location::all();
            $practice_areas = PracticeArea::all();

        $companies = Company::latest()->take(5)->get();

        $practice_areas_8 = PracticeArea::take(8)->get();

        return view('welcome', compact('job_openings','companies', 'practice_areas_8','job_opening_part','job_openings_home','location', 'practice_areas'));
    }
    
    // public function companies()
    // {

    //     $job_openings = JobOpening::latest()->take(5)->get();

    //     $Featured_Organisation = FeaturedOrganisation::where('type', 'name')->get();

    //     return view('welcome', compact('job_openings', 'Featured_Organisation'));
    // }


}

