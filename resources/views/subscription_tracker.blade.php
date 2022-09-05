@extends('layouts.template-admin')

@section('content')
<div class="container my-5">
	@include('partials.admin_common_nav', ['active' => 'subscription'])
	<h4><p align="center">Subscription Tracker</p></h4>
	<div class="row">
		<div class="offset-8 col-4 text-right mb-2">
			<form method="post" action="{{ route('subscription.tracker.export') }}">
				@csrf
				<button class="btn btn-success" title="Export Subscribers"><i class="fa fa-download" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Name 1</th>
					<th>Email</th>
					<th>Contact</th> 
					<th>Minimum Experience</th>
					<th>Location</th>
					<th>Practice Area 1</th>
					<th>Practice Area 2</th>
					<th>Practice Area 3</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subs as $sub)
				<tr>
					<td>{{ $loop->iteration }}</td>
					@php $name = $sub->fname . ' ' . $sub->lname; @endphp
					<td>{{ $name }}</td>
					<td>{{ $sub->email }}</td>
					<td>{{ $sub->contact_no }}</td>
					<td>{{ $sub->minimum_experience }}</td>
					<td>{{ $sub->location }}</td>
					@php $practice_area = \explode(",", $sub->practice_area); @endphp
					<td>@if(isset($practice_area[0])) {{ $practice_area[0] }} @endif</td>
					<td>@if(isset($practice_area[1])) {{ $practice_area[1] }} @endif</td>
					<td>@if(isset($practice_area[2])) {{ $practice_area[2] }} @endif</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
	
	