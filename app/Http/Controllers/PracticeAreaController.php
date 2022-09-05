<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PracticeArea;
use App\PracticeAreaChild;
use App\State;
use App\Location;


class PracticeAreaController extends Controller
{
    public function show(PracticeArea $practiceArea)
    {
        // return $practiceArea;
        $practice_areas = PracticeArea::all();
        $practice_area_children = PracticeAreaChild::all();
        $states = State::all();
       

        return view('practice_area.show', compact('practiceArea', 'practice_areas', 'practice_area_children', 'states'));
    }
    
    public function show_all() 
    {
        // return $practiceArea;

        $practice_areas = PracticeArea::all();
        $practice_area_children = PracticeAreaChild::all();
        $location = Location::all();
        return view ('practice_area.show_all', compact('practice_areas', 'practice_area_children', 'location'));
    }
}
