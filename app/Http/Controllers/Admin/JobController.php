<?php

namespace App\Http\Controllers\Admin;

use App\JobOpening;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function update(Request $request, JobOpening $job)
    {

        $this->validate($request, [
            'status' => 'required'
        ]);

        $job->status = $request->status;

        $job->save();

        return redirect()->back()->with('status', 'Status updated successfully');
    }
}
