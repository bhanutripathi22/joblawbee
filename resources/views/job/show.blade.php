@extends('layouts.template-search')

@section('fb-meta')
<meta property="og:title" content="{{$job->practiceArea->name}}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ route('job-show', $job) }}" />
<meta property="og:image" content="{{ asset('template/images/logo-job1200X627.jpg') }}" />
<meta property="og:description" content="Apply for job" />
@endsection

@section('twitter-meta')
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $job->practiceArea->name }}">
<meta name="twitter:description" content="Apply for job">
<meta name="twitter:image" content="{{ asset('template/images/logo-job120X120.jpg') }}">
@endsection

@section('styles')
<style>
   #social-links > ul > li {
      display:inline-block;
      list-style:none;
   }

   #social-links > ul > li .social-button {
      font-size: 18px;
      margin-right: 10px;
      color: #e84824;
   }
</style>
@endsection

@section('content')
<section>
	<div class="container">
		<div class="row"> 
			<div class="col-xs-12 col-md-12 col-lg-12" >

				<div class="row profile-div" id="des"   >
					<div class="col-xs-12 col-md-12 col-lg-12">

						<div class="row mb-3">

							<div class="col-lg-2 col-md-3 col-sm-3 ">
						<span style="font-size: 16px;">Practice Area: </span>
							</div>
								<div class="col-lg-4 col-md-4 col-sm-9 ">
								<p class="">{{$job->practiceArea->name}}</p>
								</div>

									<div class="col-lg-2 col-md-3 col-sm-3">
										<span  style="font-size: 16px;">Firm Name:</span>
									</div>
								<div class="col-lg-2 col-md-3 col-sm-9">
								<p><a href="{{ route('company-profile', $job->company) }} " class="job-des-btn">{{ $job->company->name }}</a></p>
								</div>	
						</div>



						<div class="row mb-3">
									<div class="col-lg-2 col-md-3 col-sm-3 ">
										<span style="font-size: 16px;">Total Experience:</span>
									</div>
								<div class="col-lg-4 col-md-4 col-sm-9 ">
								<span class="d-table-cell">	{{ $job->minimum_experience }} Yrs to {{ $job->maximum_experience }} Yrs</span>     
								</div>
									<div class="col-lg-2 col-md-3 col-sm-3 ">
								<p><span style="font-size: 16px;">Posted on </span>
								</div>
									<div class="col-lg-2 col-md-3 col-sm-9 "> 
								{{ \Carbon\Carbon::parse($job->created_at)->format('d-m-Y') }}</p>
								</div>
						</div>



					<div class="row mb-3">
						<div class="col-lg-2 col-md-4 col-sm-3 ">
						<span style="font-size: 16px;">Location:</span>
						</div>
							<div class="col-lg-4 col-md-4 col-sm-9">
								<i class="fa fa-map-marker red-text d-table-cell pr-2" aria-hidden="true"></i>
								 <span class="d-table-cell">{{ $job->location }}</span>     
							</div>
								
							<div  class="col-lg-2 col-md-3 col-sm-12 ">
							<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
							</div>
					</div>
						
					{{-- <div class="row">
						<div id="social-links">
						@php $url = route('job-show', $job); $text = "Check out the job posted under " . $job->PracticeArea->name . " practice area and location: " . $job->location; @endphp
							<ul>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" class="social-button "><span class="fa fa-facebook-official"></span></a></li>
							<li><a href="https://twitter.com/intent/tweet?text={{ $text }}&amp;url={{ $url }}" class="social-button "><span class="fa fa-twitter"></span></a></li>
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $url }}&amp;title={{ $text }}&amp;summary={{ $text }}" class="social-button "><span class="fa fa-linkedin"></span></a></li>    
							</ul>
						</div>
					</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="card-body col-md-12 col-lg-12 pt-0">{{-- border-right --}}
				
				
				@if($job->key_skills != null)
					<h4 class="my-3">KEY SKILLS</h4>
					@php $skills = explode(',', $job->key_skills); $skill_count = count($skills); @endphp
					@for($i = 0; $i < $skill_count; $i++ )
					<button class="key-skill-btn">{{ $skills[$i] }}</button>
					@endfor
				@endif

				 <h4>Job Description</h4>
					{!! $job->description !!}

				{{-- <h5 class="my-3">JOB POSTED BY</h5>
				<div class="job-function">
					<div class="job-text-function">COMPANY:</div>
					<div class="d-table-cell">{{ $job->company->name }}</div>
				</div> --}}
				{{-- <div class="job-function">
					<div class="job-text-function">INDUSTRY</div>
					<div class="d-table-cell">Consultancy Services (Other Consultancy Services)</div>
				</div> --}}
				{{-- <p><a class="btn-red1 mt-3" href="{{ route('apply-form', $job) }}">Apply Now</a></p> --}}
			</div>
			{{-- <div class="col-md-4 col-lg-4 side-bar">
			</div> --}}
		</div>
	</div>
</section>
@endsection