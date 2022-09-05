<?php

Route::group(['namespace' => 'Company'], function() {
    
    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('company.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('company.logout'); 
    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('company.register');
    Route::post('register', 'Auth\RegisterController@register');
    
    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('company.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('company.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('company.password.reset');
    
    // Verify
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('company.verification.resend');
    Route::get('email/verify', 'Auth\VerificationController@show')->name('company.verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('company.verification.verify');

    Route::group(['middleware' => ['company.verified']], function () {
        Route::put('/{company}/changepassword', 'UpdatePasswordController@update')->name('company.changepassword');
        
        Route::get('/', 'HomeController@index')->name('company.dashboard');

        Route::get('/{company}/jobs/posted', 'JobOpeningController@show_jobs_posted')->name('company.job.posted.show');

        Route::get('/{company}/profile', 'ProfileController@show')->name('company.profile.show');
        Route::post('/{company}/profile', 'ProfileController@store')->name('company.profile.store');
           Route::get('/pressrelease/{pressrelease}', 'PressReleaseController@edit_show')->name('company.PressRelease.edit_show');
        Route::put('/pressrelease/{pressrelease}', 'PressReleaseController@edit')->name('company.PressRelease.edit');
         Route::delete('/pressrelease/{pressrelease}', 'PressReleaseController@destroy')->name('company.PressRelease.delete');
        Route::post('/{company}/job', 'JobOpeningController@store')->name('company.job.opening.store');
        
        Route::post('/{company}/firm-profile', 'FirmProfileController@store')->name('company.firm.profile.store');

        Route::post('/{company}/press-release', 'PressReleaseController@store')->name('company.press.release.store');

        Route::post('/{company}/lawyer-profile', 'LawyerProfileController@store')->name('company.lawyer.profile.store');
    });

});