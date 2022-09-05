@extends('company.layouts.template')

@section('content')
<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
                <h4 class="border-bottom pb-3"> Search Result </h4>
                @if($jobs->count() > 0)
				@foreach($jobs as $job)
				
			 	<div class="row border p-3 mb-2 tab-text-align">
						<div class="col-xs-12 col-md-1">
						<a href="{{ route('company-profile', $job->company) }}">
						<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px;"  src="{{ $job->company->profile ? asset('storage/'.$job->company->profile->logo): asset('template/images/logo-placeholder.png') }}"></a></div>
						
							<div class="col-xs-12 col-md-3">
								
								<h6> <a href="{{ route('company-profile', $job->company) }}">{{ $job->company->name }}</a></h6>
								
							</div>
							
							<div class="col-xs-12  col-md-4 offset-md-3" style="text-align: left;" >
							<p ><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
								
							</div>
							<div class="col-xs-12 col-md-4" style="margin-left:7%;">
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->practiceArea->name}}</p>
							</div>
							<div class="col-xs-12 col-md-2" >
							<a class="job-des-btn" href="{{ route('job-show',$job) }}">Job Description</a>
							</div>
							<div class="col-xs-12 col-md-2" >
							<p><i class="red-text" aria-hidden="true" ></i>{{$job->minimum_experience}} Yrs to 
								{{$job->maximum_experience}} Yrs</p>
							</div>
							<div class="col-xs-12 col-md-3">
								<a href="{{ route('apply-form', ['job' => $job, 'search-result' => false]) }}" class="btn-red">Apply Now</a>
							</div>
						</div>
                @endforeach

                @else
                <p>No Jobs</p>
                @endif
			</div>
			<div class="col-md-4 col-lg-4 side-bar">
				{{-- @include('partials.practice_area')
				@include('partials.salary_range')
				@include('partials.location')
				@include('partials.experience') --}}

				@if(app('request')->input('q'))
					@php $q = app('request')->input('q') @endphp
				@else
					@php $q = true; @endphp
				@endif

				{{-- @include('partials.filters', ['q' => $q]) --}}
			</div>
		</div>
	</div>
</section>
@endsection





