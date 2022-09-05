@extends('layouts.template-admin')

@section('content')
<div class="container my-5">
	@include('partials.admin_common_nav', ['active' => 'application'])
	<h4><p align="center">Application Tracker</p></h4>
	<div class="row">
		<div class="offset-8 col-4 text-right mb-2">
			<form method="post" action="{{ route('application.tracker.export') }}">
				@csrf
				<button class="btn btn-success" title="Export Applications"><i class="fa fa-download" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Job Applied</th>
				<th>Employer</th> 
				<th>Practice Area</th>
				<th>Location</th>
				<th>Contact</th>
                <th>Applied on</th>
                <th>Resume</th>
			</tr>
		</thead>
		<tbody>
			@foreach($applications as $application)
			<tr>
                <td>{{ $loop->iteration }}</td>
                @php $name = trim($application->first_name . ' ' . $application->last_name); @endphp
				<td>{{ $name }}</td>
				<td>{{ ($application->job) ? $application->job->designation : '' }}</td>
				<td>{{ ($application->job) ? $application->job->company->name : '' }}</td>
				<td>{{ ($application->job) ? $application->job->practiceArea->name : '' }}</td>
				<td>{{ $application->job_location }}</td>
				<td>{{ $application->mobile }}</td>
                <td>{{ $application->created_at }}</td>
                <td><a href="{{ asset("storage/{$application->resume}") }}" style="text-decoration: underline">Download</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
	
	