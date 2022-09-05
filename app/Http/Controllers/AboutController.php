<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

class AboutController extends Controller
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
    public function about_us()
    {
         $companies = Company::all();
         return view('about', compact('companies'));
        
    }  

}