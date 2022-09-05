@extends('layouts.template-admin')

@section('content')
<div class="container my-5">
	@include('partials.admin_common_nav', ['active' => 'employer'])
	<h4><p align="center">Employer Tracker</p></h4>
	<div class="row">
		<div class="offset-8 col-4 text-right mb-2">
			<form method="post" action="{{ route('company.export') }}">
				@csrf
				<button class="btn btn-success" title="Export Employers"><i class="fa fa-download" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>company Name </th>
				<th>Email</th>
				<th>Contact Person Name</th> 
				<th>Phone No.</th>
				<th>Total Job</th>
				<th>Total Enquiry</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($companies as $company)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td><a href="{{ route('admin.show.company.jobs', $company) }}">{{ $company->name }}</a></td>
				<td>{{ $company->email }}</td>
				<td>{{isset($company->profile)? $company->profile->contact_name:'' }}</td>
				<td>{{isset($company->profile)? $company->profile->phone:'' }}</td>
				<td>{{$company->openings->count()}}</td>
				<td>{{$company->applications->count()}}</td>
				
				<td>{{ $company->status===1 ? 'Active' : 'Deactive' }}
					<form method="POST" action="{{ route('admin.companies.update', $company) }}">
						@csrf
						@method('PUT')
						<input type="hidden" name="status" value="{{ $company->status===1 ? 0 : 1 }}">
						<button type="submit" class="btn btn-primary">{{ $company->status===0 ? 'Active' : 'Deactive' }}</button>
					</form>		
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
	
	