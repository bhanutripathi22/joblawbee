<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Subscription;
use Illuminate\Http\Request;
use App\SubscriptionEmail;
use App\PracticeArea;
use App\Location;

class JobAlertController extends Controller
{
  public function subscribe(Request $request)
  {
    //$practice_areas = PracticeArea::all();
     //$location = Location::all();
 //return $request->all();
       $data = $this->validate($request, [

          'fname' =>  'required',
           'lname' =>  'required',
            'email' => ['required','string'],
            'contact_no' =>  'required',
            'minimum_experience' => 'required',
            'location' =>  'required',
            'practice_area' =>  ['array', 'required']
           
        ]);

        $practice_area = '';

        if($request->has('practice_area')){
          $practice_area = \implode(",", $request->practice_area);
        }
      
      $subscription= new SubscriptionEmail;
      $subscription->fname=$request->fname;
      $subscription->lname = $request->lname;
      $subscription->email = $request->email;
      $subscription->contact_no = $request->contact_no;
      $subscription->minimum_experience = $request->minimum_experience;
      $subscription->location = $request->location;
      $subscription->practice_area = $practice_area;
    

      if($subscription->save()){
        Mail::to($subscription->email)
              ->bcc('admin@jobslawbee.com')
              ->send(new Subscription());
      }


   
      return redirect()->back();
  }
}
