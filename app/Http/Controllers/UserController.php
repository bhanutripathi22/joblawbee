<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\Company;
use App\PracticeArea;
use App\SubscriptionEmail;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        $subscription =  SubscriptionEmail::all();
        $jobs = AppliedJob::all();
        return view('user', compact('subscription', 'jobs'));
    }  
}
