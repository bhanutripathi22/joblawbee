@extends('layouts.template' )

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="row step-div">
					<div class="col-xs-12 col-md-4 col-lg-4 text-center" data-aos="fade-up">
						<div class="step-img"><img src="{{ asset('template/images/icon_1.png') }}"></div>
						<p>Subscription to Start</p>
					</div>
					<div class="col-xs-12 col-md-4 col-lg-4 text-center" data-aos="fade-up">
						<div class="step-img"><img src="{{ asset('template/images/icon_2.png') }}"></div>
						<p>Specify & Search Your Desired Job </p>
					</div>
					<div class="col-xs-12 col-md-4 col-lg-4 text-center" data-aos="fade-up">
						<div class="step-img"><img src="{{ asset('template/images/icon_3.png') }}"></div>
						<p>Send Your Resume to Employers</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 text-center">
				<h1 class="text-uppercase" data-aos="fade-up">RECENT <span class="red-text">JOBS</span></h1>
				<div class="line"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-md-12 col-lg-12 ml-auto mr-auto">
				<!-- Tabs with Background on Card -->
				<ul class="nav nav-tabs-neutral justify-content-center tabs-red" role="tablist" data-background-color="orange">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home1" role="tab">FULL TIME</a>
					</li>
					{{-- <li class="nav-item">
						<a class="nav-link " data-toggle="tab" href="#settings1" role="tab">FULL TIME</a>
					</li> --}}
					
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#messages1" role="tab">PART TIME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile1" role="tab">WORK FROM HOME</a>
					</li>
				</ul>
			</div>
			<div class="card-body mt-4">
				<!-- Tab panes -->
				<div class="tab-content text-center">
					<div class="tab-pane active" id="home1" role="tabpanel">
						@foreach($job_openings as $job)
						<div class="row border p-3 mb-2 tab-text-align">
						<div class="col-xs-12 col-md-1">
						<a href="{{ route('company-profile', $job->company) }}">
						<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px;"  src="{{ $job->company->profile ? asset('storage/'.$job->company->profile->logo): asset('template/images/logo-placeholder.png') }}"></a></div>
						
							<div class="col-xs-12 col-md-3">
								
								<h6> <a href="{{ route('company-profile', $job->company) }}">{{ $job->company->name }}</a></h6>
								
							</div>
							
							<div class="col-xs-12 col-md-4 offset-md-3" style="text-align: left;">
							<p><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
								
							</div>
							<div class="col-xs-12 col-md-4" style="margin-left:7%;">
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->practiceArea->name}}</p>
							</div>
							<div class="col-xs-12 col-md-2" >
							<a class="job-des-btn" href="{{ route('job-show',$job) }}">Job Description</a></div>
							<div class="col-xs-12 col-md-2" >
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->minimum_experience}} Yrs to 
								{{$job->maximum_experience}} Yrs</p>
							</div>
							<div class="col-xs-12 col-md-3">
								<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
							</div>
						</div>
					@endforeach
						
					</div>


					<div class="tab-pane" id="messages1" role="tabpanel">
						@foreach($job_opening_part as $job)
								<div class="row border p-3 mb-2 tab-text-align">
							<div class="col-xs-12 col-md-1">
						<a href="{{ route('company-profile', $job->company) }}">
						<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px;" src="{{ $job->company->profile ? asset('storage/'.$job->company->profile->logo) : asset('template/images/logo-placeholder.png') }}"></a></div>
						
							<div class="col-xs-12 col-md-3">
								<h6><a href="{{ route('company-profile', $job->company) }}">{{ $job->company->name }}</a></h6>
								
							</div>
							
							<div class="col-xs-12 col-md-4 offset-md-3" style="text-align: left;">
							<p><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
								
							</div>
							<div class="col-xs-12 col-md-4" style="margin-left:7%;">
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->practiceArea->name}}</p>
							</div>
							<div class="col-xs-12 col-md-2" >
							<a class="job-des-btn" href="{{ route('job-show',$job) }}">Job Description</a></div>
							<div class="col-xs-12 col-md-2" >
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->minimum_experience}} Yrs to 
								{{$job->maximum_experience}} Yrs</p>
							</div>
							<div class="col-xs-12 col-md-3">
								<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
							</div>
						</div>
						@endforeach
						
					</div>

					<div class="tab-pane" id="profile1" role="tabpanel">
							@foreach($job_openings_home as $job)
								<div class="row border p-3 mb-2 tab-text-align">
							<div class="col-xs-12 col-md-1">
						<a href="{{ route('company-profile', $job->company) }}">
						<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px"  src="{{ $job->company->profile ? asset('storage/'.$job->company->profile->logo) : asset('template/images/logo-placeholder.png') }}"></a></div>
						
							<div class="col-xs-12 col-md-3">
								<h6><a href="{{ route('company-profile', $job->company) }}">{{ $job->company->name }}</a></h6>
							</div>
							
							<div class="col-xs-12 col-md-4 offset-md-3" style="text-align: left;">
							<p><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
								
							</div>
							<div class="col-xs-12 col-md-4" style="margin-left:7%;">
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->practiceArea->name}}</p>
							</div>
							<div class="col-xs-12 col-md-2" >
							<a class="job-des-btn" href="{{ route('job-show',$job) }}">Job Description</a></div>
							<div class="col-xs-12 col-md-2" >
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->minimum_experience}} Yrs to 
								{{$job->maximum_experience}} Yrs</p>
							</div>
							<div class="col-xs-12 col-md-3">
						<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>

	<div class="container mt-3">
		<div class="row" data-aos="fade-up">
			<div class="col-xs-12 col-md-12 text-center">
				<a href="{{ route('job.index') }}" class="btn-red">View all</a>
			</div>
		</div>
	</div>
</section>
<section class="my-5 py-5" style="background:#fbfcfd;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1 class="text-uppercase" data-aos="fade-up">PRACTICE <span class="red-text">AREAS</span></h1>
				<div class="line"></div>
			</div>
		</div>
	</div>
	<div class="container pb-5">
		<div class="row" data-aos="fade-up">
			@foreach($practice_areas_8 as $practice)
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-5 text-center">
				<div class="bg-area border">
					<div class="step-img"><img src="{{ asset('template/images/icon_4.png') }}"></div>
					<h5 style="color:black">{{ $practice->name }}</h5>
					<a class="btn-red overlap-btn" href="{{ route('practicearea.show', $practice) }}">View Detail</a>
				</div>
			</div>

			@endforeach
		</div>
	</div>

	<div class="container mt-3">
		<div class="row" data-aos="fade-up">
			<div class="col-xs-12 col-md-12 text-center">
				<a href="{{ route('practicearea.show.all') }}" class="btn-red">View all</a>
			</div>
		</div>
	</div>

</section>

{{-- <section  class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1 class="text-uppercase" data-aos="fade-up">FEATURED <span class="red-text">ORGANISATION</span></h1>
				<div class="line"></div>
				<p data-aos="fade-up">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
			</div>
		</div>
		<div class="row mt-3">
			@foreach ($companies as $company)

			@if($company->profile)
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">{{ $company->name }}</h5>
					<p>{{ $company->name }}</p>
					<a class="btn-red-border" href="{{ route('company-profile', $company) }}">View Detail</a>
				</div>
			</div>
			@endif
			@endforeach
			{{-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">Heading</h5>
					<p>text</p>
					<a class="btn-red-border" href="profile.html">View Detail</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">Heading</h5>
					<p>text</p>
					<a class="btn-red-border" href="profile.html">View Detail</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">Heading</h5>
					<p>text</p>
					<a class="btn-red-border" href="profile.html">View Detail</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">Heading</h5>
					<p>text</p>
					<a class="btn-red-border" href="profile.html">View Detail</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">Heading</h5>
					<p>text</p>
					<a class="btn-red-border" href="profile.html">View Detail</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">Heading</h5>
					<p>text</p>
					<a class="btn-red-border" href="profile.html">View Detail</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4 text-center" data-aos="fade-up">
				<div class="bg-company">
					<img class="mb-3" src="{{ asset('template/images/dell-logo.jpg') }}">
					<h5 class="m-0">Heading</h5>
					<p>text</p>
					<a class="btn-red-border" href="profile.html">View Detail</a>
				</div>
			</div>
	</div>
</section> --}}


<section  class="mt-5 mb-0 py-5" style="background:#fbfcfd;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1 class="text-uppercase" data-aos="fade-up">WHAT MAKE <span class="red-text">US SPECIAL</span></h1>
				<div class="line"></div>
				<p data-aos="fade-up">Jobs Lawbee is an excellent solution for independent lawyers, law-firms, companies, organisations, large and small, to reach out to the global pool of graduates and highly skilled legal professionals. Jobs Lawbee help legal professionals to take a big step in their career enhancement. Being focused on legal industry, Jobs Lawbee is able to focus on your brand and deliver your jobs to the right audience.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-3">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="mb-4 bg-company1" data-aos="fade-up">
					<h6 style="font-weight: bold;">
						<i style="color:red;" aria-hidden="true";></i>
						  Covering Market Gap</h6>
					<p class="m-0">Jobs Lawbee is the first legal job search provider in India. With our extensive system, lawyers can easily find the right jobs.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="mb-4 bg-company1" data-aos="fade-up">
					<h6 style="font-weight: bold;">
						<i style="color:red;" aria-hidden="true"></i> Our Mission</h6>
					<p class="m-0">Your job is not our service; it is our mission. We are on a mission to get you the job you always wanted.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="mb-4 bg-company1" data-aos="fade-up">
					<h6 style="font-weight: bold;">
						<i style="color:red;" aria-hidden="true"></i>No Registration Required</h6>
					<p class="m-0">Tired of all the registration and spam mails? Don't worry. We don't require any registration to apply for a job.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="mb-4 bg-company1" data-aos="fade-up">
					<h6 style="font-weight: bold;"><i style="color:red;" aria-hidden="true"></i> Sourcing the Right-Fit to your</h6>
					<p class="m-0">With our unique set of keywords and skills sets, we help you to find the right talent.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="mb-4 bg-company1" data-aos="fade-up">
					<h6 style="font-weight: bold;"><i style="color:red;" aria-hidden="true"></i>  Categorised Practice Areas</h6>
					<p class="m-0">As expert consultant to the legal industry, we understand how important it is to get a job relating to your practice area. Keeping that in mind, we have designed Jobs Lawbee</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="mb-4 bg-company1" data-aos="fade-up">
					<h6 style="font-weight: bold;"><i style="color:red;" aria-hidden="true"></i>Committed to helping you to Succeed</h6>
					<p class="m-0">We are committed to support the lawyers, law-firms, companies, organisations to succeed with the right kind of talent.

</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
