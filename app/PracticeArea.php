<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticeArea extends Model
{

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function openings()
    {
        return $this->hasMany('App\JobOpening', 'practice_area');
    }

    public function subPracticeAreas()
    {
        return $this->hasMany('App\PracticeAreaChild', 'practice_area_id');
    }
}
