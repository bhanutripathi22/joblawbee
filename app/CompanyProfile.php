<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function profile()
    {
        return $this->belongsTo('App\CompanyProfile', 'profile_text');
    }

}
