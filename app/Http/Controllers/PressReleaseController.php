<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\PressRelease;
use App\Location;
use App\PracticeArea;
use App\CompanyProfile;
class PressReleaseController extends Controller
{
    public function index(PressRelease $pressrelease)
    {
        $location = Location::all();
        // $pressrelase = PressRelease::all();
        $practice_areas = PracticeArea::all();
        return view('pressrelease', compact('pressrelease', 'location', 'practice_areas'));
    }
}
