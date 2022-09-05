<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function applications()
    {
        return $this->hasMany('App\AppliedJob', 'job_id');
    }

    public function practiceArea()
    {
        return $this->belongsTo('App\PracticeArea', 'practice_area');
    }

    // public function jobtitle()
    // {
    //     return $this->belongsTo('App\Company', 'JobOpening');
    // }

    public function subPracticeArea()
    {
        return $this->hasOne('App\PracticeAreaChild', 'sub_practice_area');
    }
}
