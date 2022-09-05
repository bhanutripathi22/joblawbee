<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployerTrackerExport;

use App\Company;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {

        $companies = Company::all();

        // return $companies;

        return view('admin.company.show_company_list', compact('companies'));
    }

    public function update(Request $request, Company $company)
    {

        $this->validate($request, [
            'status' => 'required|boolean'
        ]);

        $company->status = $request->status;

        $company->save();

        return redirect()->back()->with('status', 'Status updated successfully');
    }
    
    public function show_company_jobs(Company $company)
    {
        $jobs = $company->openings;
        return view('admin.company.show_company_jobs', compact('jobs'));
    }
    
    public function export()
    {
        $companies = Company::all();
        return Excel::download(new EmployerTrackerExport($companies), 'EmployerTracker.xlsx');
    }

}