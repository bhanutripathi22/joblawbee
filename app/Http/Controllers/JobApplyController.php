<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\JobApplied;
use App\Mail\CompanyEmail;
use Illuminate\Http\Request;

use App\JobOpening;
use App\PracticeArea;
use App\PracticeAreaChild;
use App\State;
use App\KeySkill;
use App\Location;
use App\SubscriptionEmail;
use Illuminate\Support\Facades\Mail;

class JobApplyController extends Controller
{
    public function apply_form(JobOpening $job)
    {
        $job_openings = JobOpening::where('status', 1)->latest()->get();
        $practice_area_children = PracticeAreaChild::all();
        $states = State::all();
        $practice_areas = PracticeArea::all();
         $location = Location::all();

        return view('jobapply.apply_form', compact('job', 'practice_areas',  'location', 'job_openings', 'practice_area_children', 'states'));
    }

    public function apply(Request $request, JobOpening $job){

         //return $request->all();

        $data = $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mobile' => 'required',
            'email' => 'required',
            'qualification_ug' => 'string|nullable',
              'clg_passingyear_ug' => 'string|nullable',
            'job_location' => ['string', 'nullable'],
              'qualification_pg' => 'string|nullable',
            'clg_passingyear_pg' => 'string|nullable',
            'current_employer' => 'string|nullable',
           'minimum_experience' => 'string|nullable',
            'maximum_experience' => 'string|nullable',
            'practice_area' => 'string',
             'location' => 'string',
             'current_salary_lakh' => 'string|nullable',
            'current_salary_thousand' => 'string|nullable',
            'comment' => 'string|nullable',
            'resume' => 'required|mimes:pdf,docx,doc'
        ]);


        $path = $request->file('resume')->store('candidate_resume', 'public');

        // $data['bdate'] = Carbon::createFromFormat('m/d/Y', $request->bdate)->format('Y-m-d');
        $data['resume'] = $path;
        // $data["job_location"] = implode(',', $data['job_location']);
  //return $data;
        $applied= $job->applications()->create($data);

        // $subscriber = new SubscriptionEmail;

        // $subscriber->email = $data['email'];
        // $subscriber->save();
        // // $data['email']
       // return $job->company;

          $subject = 'Job Application: ' . $job->practiceArea->name . '| ' . $job->minimum_experience . ' to ' . $job->maximum_experience . ' | ' . $job->location;

         Mail::to($data['email'])
          ->bcc('admin@jobslawbee.com')
          ->send(new JobApplied($job, $subject));
             
         Mail::to($job->company->email)
          ->bcc('admin@jobslawbee.com')
          ->send(new CompanyEmail($applied, $subject));
        
         return redirect()->back()->with('success', 'Application sent successfully');
    }

    public function show_applications(JobOpening $job)
    {
      return view('jobapply.show_applications', compact('job'));
    }



    
  
    
}
