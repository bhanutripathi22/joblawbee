<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/company/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company.auth:company');
    }

    /**
     * Show the Company dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        // return redirect()->route('company.profile.show', auth()->guard('company')->user());

        return redirect()->route('company.job.posted.show', auth()->guard('company')->user());
    }

}
