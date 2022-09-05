@extends('layouts.template-search')

@section('content')

    <div class="container py-5" >
		<div class="w-100" style="margin-top: 10%;"  data-aos="fade-up">
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
				<div class="tab-content text-center">
					<div class="tab-pane active" id="home1" role="tabpanel">
						@if($job_openings->count() > 0)
							@foreach($job_openings as $job)
								<div class="row border p-3 mb-2 tab-text-align">
								<div class="col-xs-12 col-md-1">
								<a href="{{ route('company-profile', $job->company) }}">
								<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px;"  src="{{ ($job->company->profile && $job->company->profile->logo) ? asset('storage/'.$job->company->profile->logo): 'https://ui-avatars.com/api/?background=e84824&color=ffffff&name='.$job->company->name }}"></a></div>
								
									<div class="col-xs-12 col-md-3 text-left">
										
										<h6> <a href="{{ route('company-profile', $job->company) }}">{{ $job->company->name }}</a></h6>
										
									</div>
									
									<div class="col-xs-12 col-md-4 offset-md-3 p-0" style="text-align: left;">
									<p id="loc"><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
										
									</div>
									<div class="col-xs-12 col-md-4 offset-md-1 text-left" >
									<p><i class="red-text" aria-hidden="true" ></i>{{$job->practiceArea->name}}</p>
									</div>
									<div class="col-xs-12 col-md-2" >
									<a class="job-des-btn" href="{{ route('job-show',$job) }}">Job Description</a></div>
									<div class="col-xs-12 col-md-2" >
									<p class="text-left"><i class="red-text" aria-hidden="true" ></i>{{$job->minimum_experience}} Yrs to 
										{{$job->maximum_experience}} Yrs</p>
									</div>
									<div class="col-xs-12 col-md-3">
										<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
									</div>
								</div>
							@endforeach
						@else
							<p class="text-center">No Jobs Available</p>
						@endif
					</div>
				

					<div class="tab-pane" id="messages1" role="tabpanel">
						@if($job_opening_part->count() > 0)
							@foreach($job_opening_part as $job)
								<div class="row border p-3 mb-2 tab-text-align">
								<div class="col-xs-12 col-md-1">
								<a href="{{ route('company-profile', $job->company) }}">
								<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px;"  src="{{ $job->company->profile ? asset('storage/'.$job->company->profile->logo): asset('template/images/logo-placeholder.png') }}"></a></div>
								
									<div class="col-xs-12 col-md-3 text-left">
										
										<h6> <a href="{{ route('company-profile', $job->company) }}">{{ $job->company->name }}</a></h6>
										
									</div>
									
									<div class="col-xs-12 col-md-4 offset-md-3 p-0" style="text-align: left;">
									<p id="loc"><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
										
									</div>
									<div class="col-xs-12 col-md-4 offset-md-1 text-left" >
									<p><i class="red-text" aria-hidden="true" ></i>{{$job->practiceArea->name}}</p>
									</div>
									<div class="col-xs-12 col-md-2" >
									<a class="job-des-btn" href="{{ route('job-show',$job) }}">Job Description</a></div>
									<div class="col-xs-12 col-md-2" >
									<p class="text-left"><i class="red-text" aria-hidden="true" ></i>{{$job->minimum_experience}} Yrs to 
										{{$job->maximum_experience}} Yrs</p>
									</div>
									<div class="col-xs-12 col-md-3">
										<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
									</div>
								</div>
							@endforeach
						@else
							<p class="text-center">No Jobs Available</p>
						@endif
					</div>

					<div class="tab-pane" id="profile1" role="tabpanel">
						@if($job_openings_home->count() > 0)
							@foreach($job_openings_home as $job)
							<div class="row border p-3 mb-2 tab-text-align">
							<div class="col-xs-12 col-md-1">
							<a href="{{ route('company-profile', $job->company) }}">
							<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px;"  src="{{ $job->company->profile ? asset('storage/'.$job->company->profile->logo): asset('template/images/logo-placeholder.png') }}"></a></div>
							
								<div class="col-xs-12 col-md-3 text-left">
									
									<h6> <a href="{{ route('company-profile', $job->company) }}">{{ $job->company->name }}</a></h6>
									
								</div>
								
								<div class="col-xs-12 col-md-4 offset-md-3 p-0" style="text-align: left;">
								<p id="loc"><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
									
								</div>
								<div class="col-xs-12 col-md-4 offset-md-1 text-left" >
								<p><i class="red-text" aria-hidden="true" ></i>{{$job->practiceArea->name}}</p>
								</div>
								<div class="col-xs-12 col-md-2" >
								<a class="job-des-btn" href="{{ route('job-show',$job) }}">Job Description</a></div>
								<div class="col-xs-12 col-md-2" >
								<p class="text-left"><i class="red-text" aria-hidden="true" ></i>{{$job->minimum_experience}} Yrs to 
									{{$job->maximum_experience}} Yrs</p>
								</div>
								<div class="col-xs-12 col-md-3">
									<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
								</div>
							</div>
							@endforeach
						@else
							<p class="text-center">No Jobs Available</p>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 