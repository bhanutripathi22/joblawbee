<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ApplicationTrackerExport;
use App\Exports\SubscriptionTrackerExport;
use App\Exports\JobPostingTrackerExport;


use App\CompanyProfile;
use App\Company;
use App\JobOpening;
use App\Location;
use App\PracticeArea;
use App\AppliedJob;
use App\SubscriptionEmail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $companies = Company::all();
         $jobs =  JobOpening::all();
         $profile = CompanyProfile::all();
        
         return view('home', compact('companies', 'jobs'));
        
     }  


    public function job_search()
    {
        return view('searchjob');
    }

    public function application_tracker()
    {
        $applications = AppliedJob::all();
        return view('application_tracker', compact('applications'));
    }

    public function export_application_tracker()
    {
        $applications = AppliedJob::all();
        return Excel::download(new ApplicationTrackerExport($applications), 'EmployerTracker.xlsx');
    }

    public function subscription_tracker()
    {
        $subs = SubscriptionEmail::all();
        return view('subscription_tracker', compact('subs'));
    }

    public function export_subscription_tracker()
    {
        $subs = SubscriptionEmail::all();
        return Excel::download(new SubscriptionTrackerExport($subs), 'EmployerTracker.xlsx');
    }

    public function job_posting_tracker()
    {
        $jobs = JobOpening::all();
        return view('job_posting_tracker', compact('jobs'));
    }

    public function export_job_posting_tracker()
    {
        $jobs = JobOpening::all();
        return Excel::download(new JobPostingTrackerExport($jobs), 'EmployerTracker.xlsx');
    }

}