<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
class UpdatePasswordController extends Controller
{
    public function update(Request $request, Company $company)
    {
        $this->validate($request, 
        array(
        'password'=>'required|string|min:5|confirmed'));
        $company->password= bcrypt($request->password);
        $company->save();
        return redirect()->back()->with('success','password updated sucessfully');
    }
}
