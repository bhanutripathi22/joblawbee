@extends('layouts.template-admin')

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
<div class="container my-5">
	@include('partials.admin_common_nav', ['active' => 'job_posting'])
	<h4><p align="center">Job posting Tracker</p></h4>
	<div class="row">
		<div class="offset-8 col-4 text-right mb-2">
			<form method="post" action="{{ route('job.posting.tracker.export') }}">
				@csrf
				<button class="btn btn-success" title="Export Job Postings"><i class="fa fa-download" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Practice Area</th>
				<th>Posted on</th>
				<th>Firm Name</th> 
				<th>Total Vacancy</th>
				<th>Location</th>
				<th>No. of Application received</th>
				<th>Share</th>
			</tr>
		</thead>
		<tbody>
			@foreach($jobs as $job)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $job->practiceArea->name }}</td>
				<td>{{ $job->created_at }}</td>
				<td>{{ $job->company->name }}</td>
				<td>{{ $job->no_of_vacancies }}</td>
				<td>{{ $job->location }}</td>
				<td>{{ $job->applications->count() }}</td>
				<td style="width:15%;">
					<div id="social-links">
					@php $url = route('job-show', $job); $text = "Check out the job posted under " . $job->PracticeArea->name . " practice area"; @endphp
						<ul>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" class="social-button " id=""><span class="fa fa-facebook-official"></span></a></li>
						<li><a href="https://twitter.com/intent/tweet?text={{ $text }}&amp;url={{ $url }}" class="social-button " id=""><span class="fa fa-twitter"></span></a></li>
						<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $url }}&amp;title={{ $text }}&amp;summary={{ $text }}" class="social-button " id=""><span class="fa fa-linkedin"></span></a></li>    
						</ul>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
	
	