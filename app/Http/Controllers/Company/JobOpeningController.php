<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Company;
use App\JobOpening;

class JobOpeningController extends Controller
{
    // public function store(Request $request, Company $company)
    // {

    //     //return $request->all();
    //     $data = $this->validate($request, [
    //         'title' => ['nullable'],
    //         'designation' => ['required'],
    //         'practice_area' => ['required'],
    //         'location' => ['array', 'required'],
    //         'min_salary' => ['required'],
    //         'min_amount' => ['required'],
    //         'max_salary' => ['nullable'],
    //         'max_amount' => ['nullable'],
    //         // 'hide_salary' => ['nullable'],
    //         'minimum_experience' => ['required'],
    //         'maximum_experience' => ['required'],
    //         'key_skills' => ['array', 'required'],
    //         'type' => ['required'],
    //         'no_of_vacancies' => ['required'],
    //         'description' => ['required']
    //     ]);

    //     // $key_skills = array();

    //     // if( isset( $data['key_skills'] ) ){

    //     // }

    //     // $data['sub_practice_area'] = $data['sub_practice_area'] == 0 ? NULL : $data['sub_practice_area'];
    //     $data["key_skills"] = isset($data['key_skills']) ?  implode(',', $data['key_skills']) : Null;
    //     $data["location"] = implode(',', $data['location']);
    //     //    $data["min_salary"] = $data["min_salary"]." ".$request->min_amount; 
    //     //     $data["max_salary"] = $data["max_salary"]." ".$request->max_amount; 

    //     // $data['company_id'] = $company->id;

    //     // $job_opening = new JobOpening;
    //     // $job_opening->create($data);

    //     $company->openings()->create($data);

    //     // return redirect()->back()->with('success', 'Job Opening posted successfully!!');

    //     return response()->json(['success' => true, 'message' => 'Job posted successfully', 'type' => 'job_store']);
    //     // return redirect()->route('company.job.posted.show', $company)->with('success', 'Jobs posted successfully');
    // }

    public function store(Request $request, Company $company)
    {

        //return $request->all();
        $data = $this->validate($request, [
            'title' => ['nullable'],
            'designation' => ['required'],
            'practice_area' => ['required'],
            'location' => ['array', 'required'],
            'min_salary' => ['required'],
            'min_amount' => ['required'],
            'max_salary' => ['nullable'],
            'max_amount' => ['nullable'],
            'hide_salary' => ['nullable'],
            'minimum_experience' => ['required'],
            'maximum_experience' => ['required'],
            'key_skills' => ['array', 'required'],
            'type' => ['required'],
            'no_of_vacancies' => ['required'],
            'description' => ['required']
        ]);

        // $key_skills = array();

        // if( isset( $data['key_skills'] ) ){

        // }

        if(isset($data["hide_salary"])){
            $data["hide_salary"] = $data["hide_salary"] == "yes" ? 1 : 0;
            $data['min_salary'] = '';
        }

        // $data['sub_practice_area'] = $data['sub_practice_area'] == 0 ? NULL : $data['sub_practice_area'];
        $data["key_skills"] = isset($data['key_skills']) ?  implode(',', $data['key_skills']) : Null;
        $data["location"] = implode(',', $data['location']);
        //    $data["min_salary"] = $data["min_salary"]." ".$request->min_amount; 
        //     $data["max_salary"] = $data["max_salary"]." ".$request->max_amount; 

        $company->openings()->create($data);

        // return redirect()->back()->with('success', 'Job Opening posted successfully!!');

        return response()->json(['success' => true, 'message' => 'Job posted successfully', 'type' => 'job_posted']);
    }

    public function show_jobs_posted()
    {
        return view('company.jobopening.show_jobs_posted', ['company' => auth()->guard('company')->user()]);
    }
}
