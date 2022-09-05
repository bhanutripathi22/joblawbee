<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobOpening;
use App\PracticeArea;
use App\PracticeAreaChild;
use App\State;
use App\KeySkill;
use App\Location;
class JobController extends Controller
{
    public function show(JobOpening $job)
    {
        $practice_areas = PracticeArea::all();
        $practice_area_children = PracticeAreaChild::all();
        $states = State::all();
         $location = Location::all();

        return view('job.show', compact('job', 'practice_areas', 'practice_area_children', 'states','location'));
    }

    public function edit(JobOpening $job)
    {

        $practice_areas = PracticeArea::all();
        $location = Location::all();
        $skills = KeySkill::all();
        return view('job.edit', compact('job', 'practice_areas', 'location','skills'));
    }

    public function update(Request $request, JobOpening $job)
    {
       // return $request->all();
         $data = $this->validate($request, [
            'title' => ['nullable'],
            'designation' => ['required'],
            'practice_area' => ['required'],
            'location' => ['array','nullable'],
            'type' => ['required'],
            'min_salary' => ['required'],
            'max_salary' => ['nullable'],
            'min_amount' => ['nullable'],
            'max_amount' => ['nullable'],
            'minimum_experience' => ['required'],
            'maximum_experience' => ['required'],
            'hide_salary' => ['nullable'],
            'minimum_experience' => ['required'],
            'maximum_experience' => ['required'],
            'key_skills' =>  ['array','nullable'],
            'no_of_vacancies' => ['required'],
            'description' => ['required']
        ]);

        if($request->min_salary == 'as per industry standards'){
            $data['max_salary'] = null;
        }

        if(isset($data["hide_salary"])){
            $data["hide_salary"] = $data["hide_salary"] == "yes" ? 1 : 0;
            $data['min_salary'] = '';
        }

        if(isset($data['key_skills']) && !empty($data['key_skills']))
            $data["key_skills"] = implode(',', $data['key_skills']);
        if (isset($data['location']) && !empty($data['key_skills']))
            $data["location"] = implode(',', $data['location']);

        // $data["min_salary"] = $data["min_salary"] . " " . $request->min_amount;
        // $data["max_salary"] = $data["max_salary"] . " " . $request->max_amount; 

        $job->update($data);

        return redirect()->back()->with('success', 'Job Opening updated successfully!!');
    }



    public function update_status(Request $request, JobOpening $job)
    {
        $job->status = $request->status;

        $job->save();

        return redirect()->back()->with('success', 'Status updated successfully');
    }

    public function index()
    {
        // $job_openings = JobOpening::where('status', 1)->latest()->get();
        $job_openings = JobOpening::where('type', 'full_time')->where('status', 1)->latest()->get();
        $job_opening_part = JobOpening::where('status', 1)->where('type','part_time')->latest()->get();
        $job_openings_home = JobOpening::where('status', 1)->where('type','work_from_home')->latest()->get();
        
        $practice_areas = PracticeArea::take(8)->get();
        $practice_area_children = PracticeAreaChild::all();
        $states = State::all();
        $location = Location::all();
        return view('job.index', compact('job_openings', 'job_opening_part', 'job_openings_home', 'location', 'practice_area_children', 'practice_areas', 'states'));
    }
}
