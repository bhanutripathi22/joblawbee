<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    protected $guarded = [];

    public function job()
    {
       return $this->belongsTo('App\JobOpening', 'job_id');
        
    }

    public function practiceArea()
    {
        return  $this->belongsTo('App\PracticeArea','practice_area');
    }


}
