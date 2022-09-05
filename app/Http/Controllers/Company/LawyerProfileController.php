<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Company;

class LawyerProfileController extends Controller
{
    public function store(Request $request, Company $company)
    {
        $data = $this->validate($request, [
            'profile_text' => ['required', 'string'],
            
        ]);

        $data["company_id"] = $company->id;

        $company->lawyerProfiles()->create(
            $data
        );

        return response()->json(['success' => true, 'message' => 'Lawyer Profiles added successfully!!']);
    }
}
