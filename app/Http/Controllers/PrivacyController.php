<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\PracticeArea;

class PrivacyController extends Controller
{
    public function index()
    {
        $location = Location::all();
        $practice_areas = PracticeArea::all();
        // return $company;

        return view('privacy', compact('location', 'practice_areas'));
    }
}
