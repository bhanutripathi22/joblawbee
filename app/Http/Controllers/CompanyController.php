<?php

namespace App\Http\Controllers;

use App\Company;
use App\PressRelease;
use App\Location;
use App\PracticeArea;
use App\CompanyProfile;
use Illuminate\Http\Request;



class CompanyController extends Controller
{
    
    public function profile(Company $company)
    {
        $location = Location::all();
        $practice_areas = PracticeArea::all();
        // return $company;
   
        return view('company_profile', compact('company', 'location', 'practice_areas'));
    }
}
