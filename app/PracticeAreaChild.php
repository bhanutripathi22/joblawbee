<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticeAreaChild extends Model
{
    protected $guarded = [];

    public function openings()
    {
        return $this->hasMany('App\JobOpening', 'sub_practice_area');
    }

    public function practiceArea()
    {
        return $this->belongsTo('App\PracticeArea', 'practice_area_id');
    }
}
