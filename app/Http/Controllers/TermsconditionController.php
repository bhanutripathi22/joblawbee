<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\PracticeArea;

class TermsconditionController extends Controller
{
    public function index()
    {
        $location = Location::all();
        $practice_areas = PracticeArea::all();
        // return $company;

        return view('terms', compact('location', 'practice_areas'));
    }
}
