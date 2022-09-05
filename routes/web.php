<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// use App\Http\Controllers\Admin\SubscriptionController;

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::view('/about','about');
Route::view('/contact','contact');
// Route::view('/privacy','privacy');
// Route::view('/terms','terms');
Route::view('/lawbee','lawbee');
Route::view('/activity','activity');

Route::get('privacy', 'PrivacyController@index')->name('privacy');
Route::get('terms', 'TermsconditionController@index')->name('term');
Route::get('pressrelease/{pressrelease}', 'PressReleaseController@index')->name('pressrelease');

Auth::routes(['register' => false]);

Route::get('home', 'HomeController@index')->name('home');
Route::get('application-tracker', 'HomeController@application_tracker')->name('application.tracker');
Route::get('subscription-tracker', 'HomeController@subscription_tracker')->name('subscription.tracker');
Route::get('job-posting-tracker', 'HomeController@job_posting_tracker')->name('job.posting.tracker');


Route::get('user', 'UserController@index')->name('user');

Route::get('companies/{company}', 'CompanyController@profile')->name('company-profile');

Route::get('companies/list/all', 'Admin\CompanyController@show')->name('admin.comapanies.list');
Route::get('companies/{company}/jobs', 'Admin\CompanyController@show_company_jobs')->name('admin.show.company.jobs');
Route::put('companies/{company}/update', 'Admin\CompanyController@update')->name('admin.companies.update');

Route::get('companies/list/all', 'Admin\CompanyController@show')->name('admin.comapanies.Title');
Route::put('companies/{company}/update', 'Admin\CompanyController@update')->name('admin.companies.update');
Route::put('job/{job}/update', 'Admin\JobController@update')->name('admin.job.update');

Route::post('subscribe', 'JobAlertController@subscribe')->name('subscribe');
Route::get('search', 'SearchController@index')->name('search');

Route::post('searchjob', 'SearchController@searchkeyword')->name('search.job');

Route::get('job', 'JobController@index')->name('job.index');
Route::get('job/{job}', 'JobController@show')->name('job-show');
Route::get('job/{job}/edit', 'JobController@edit')->name('job-edit');
Route::put('job/{job}', 'JobController@update')->name('job-update');
Route::put('job/{job}/update-status', 'JobController@update_status')->name('job-update-status');
Route::get('job/{job}/apply', 'JobApplyController@apply_form')->name('apply-form');
Route::post('job/{job}/apply', 'JobApplyController@apply')->name('apply');
Route::get('job/{job}/applications', 'JobApplyController@show_applications')->name('show-applications');


// Route::get('search-job', 'HomeController@job_search')->name('search.job');

Route::get('practice-area/{practiceArea}/jobs', 'PracticeAreaController@show')->name('practicearea.show');

Route::get('practice-area/all', 'PracticeAreaController@show_all')->name('practicearea.show.all');

Route::post('job/{job}/mail','Admin\SubscriptionController@sendMail')->name('admin-subscriptiion-mail');

Route::post('companies/export', 'Admin\CompanyController@export')->name('company.export');
Route::get('application/export', 'HomeController@export_application_tracker')->name('application.tracker.export');
Route::get('subscription/export', 'HomeController@export_subscription_tracker')->name('subscription.tracker.export');
Route::get('job-posting/export', 'HomeController@export_job_posting_tracker')->name('job.posting.tracker.export');


// Route::get('check', function() {
//     $practice_area = \App\PracticeArea::find(1);
//     return $practice_area->subPracticeAreas;
// });
