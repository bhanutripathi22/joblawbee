<?php

namespace App\Http\Controllers\Admin;

use App\Mail\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


use App\JobOpening;
use App\SubscriptionEmail;

class SubscriptionController extends Controller
{
    public function sendMail(JobOpening $job)
    {
        $subscribers = SubscriptionEmail::all();

        foreach  ($subscribers as $subscriber){
            Mail::to($subscriber->email)
            ->send(new Subscription($job));
        }

        return redirect()->back()->with('success', 'Mail sent successfully');
    }
}
