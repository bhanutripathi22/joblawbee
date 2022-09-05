<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PracticeArea;


class jobdropdowncontroller extends Controller
{

    public function sub_practice_areas($id)
    {
        $practice_area = PracticeArea::findOrFail($id);
        $sub_practice_areas = $practice_area->subPracticeAreas;
        return response()->json(['sub_practice_areas' => $sub_practice_areas]);
    }

}
