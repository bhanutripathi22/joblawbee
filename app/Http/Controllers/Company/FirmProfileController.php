<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Company;

class FirmProfileController extends Controller
{
    public function store(Request $request, Company $company)
    {
        $data = $this->validate($request, [
            'profile_text' => ['required', 'string']
        ]);

        $company->firmProfile()->updateOrCreate(
            [
                'company_id' => $company->id
            ],
            $data
        );

        return response()->json(['success' => true, 'message' => 'Firm Profile added successfully!!']);
    }
}
