<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

use App\Company;
use App\PracticeArea;
use App\PracticeAreaChild;
use App\PressRelease;
use App\Location;
use App\KeySkill;

class ProfileController extends Controller
{

    public function show(Company $company)
    {
       // $press_Release  = PressRelease::all();
        $practice_areas = PracticeArea::all();
        $practice_area_children = PracticeAreaChild::all();
        $location = Location::all();
        $skills = KeySkill::all();
        return view('company.profile.show', compact('company', 'practice_areas', 'practice_area_children', 'location','skills'));
    }

    public function store(Request $request, Company $company)
    {

        // return $request->all();
        // $imagecondition = (isset($company->profile) && $company->profile->logo) ? 'nullable': 'required';

        $data = $this->validate($request, [
            'address1' => ['required', 'string'],
            'company_name' => ['required'],
            'city' => ['required', 'string'],
            'designation' => ['required', 'string'],
            'contact_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'profile_text'=>  ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'pincode' => ['required', 'numeric'],
            'phone' => ['required', 'numeric', 'nullable'],
            'website' => ['url', 'nullable'],
            'logo' => ['image', 'nullable']
        ]);

        $imagePath = $request->file('logo')? $request->file('logo')->store('company_logo', 'public') : null;

        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(250, 250);
        // $image->save();
        
        if($imagePath!=null){
            $data['logo'] = $imagePath;
        }

        $company->contact_person_name = $request->contact_name;
        $company->phone = $request->phone;
        $company->save();
        

        $company->profile()->updateOrCreate(['company_id' => $company->id], $data);

        return redirect()->back()->with('success', 'Profile Created/Updated successfully!');
    }
}
