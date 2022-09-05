<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\PressRelease;

class PressReleaseController extends Controller
{
    public function store(Request $request, Company $company)
    {
       

        $data = $this->validate($request, [
             'tittle' => ['required', 'string'],
            'press_text' => ['required', 'string']
        ]);

        $company->pressReleases()->create($data);

        return response()->json(['success' => true, 'message' => 'Press Release added successfully!!']);
    }



    public function edit_show(PressRelease $pressrelease)
    {
       //return $pressrelease;
        return view('company.profile.pressrelease', compact('pressrelease'));
    }


    public function edit(Request $request, PressRelease $pressrelease) 
    {


        $data = $this->validate($request, [
            'tittle' => ['required', 'string'],
            'press_text' => ['required', 'string']
        ]);

        $pressrelease->update($data);

        return response()->json(['success' => true, 'message' => 'Press Release updated successfully!!']);
    }

    public function destroy(PressRelease $pressrelease)
    {
        $pressrelease->delete();

        return redirect()->back()->with(['message' => 'Press Release delete successfully!!']);
    }




}
