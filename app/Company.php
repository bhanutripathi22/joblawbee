<?php

namespace App;

use App\Notifications\Company\Auth\ResetPassword;
use App\Notifications\Company\Auth\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{

    //  implements MustVerifyEmail
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'contact_person_name', 'email', 'phone', 'password', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    public function profile()
    {
        return $this->hasOne('App\CompanyProfile');
    }

    public function openings()
    {
        return $this->hasMany('App\JobOpening');
    }

    public function firmProfile()
    {
        return $this->hasOne('App\FirmProfile');
    }

    public function pressReleases()
    {
        return $this->hasMany('App\PressRelease');
    }

    public function lawyerProfiles()
    {
        return $this->hasMany('App\LawyerProfile');
    }

    public function applications()
    {
        return $this->hasManyThrough('App\AppliedJob','App\JobOpening','company_id','job_id');
    }
}
