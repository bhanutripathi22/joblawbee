@extends('layouts.template-admin')

@section('content')
   <div class="container my-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="lawyerProfile-tab" data-toggle="tab" href="#lawyerProfile" role="tab" aria-controls="lawyerProfile" aria-selected="false">Job Applied User</a>
        </li>
        
    <li class="nav-item">
            <a class="nav-link" id="jobOpening-tab" data-toggle="tab" href="#jobOpening" role="tab" aria-controls="jobOpening" aria-selected="false">Subscribe User</a>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent">
       <div class="tab-pane fade show active" id="lawyerProfile" role="tabpanel" aria-labelledby="lawyerProfile-tab">
            <br/>
            
            <table class="table table-bordered">
		<h4><p align="center">Users Details</p></h4>   
		<thead>
				<tr>
				<th>#</th>
				<th> Name </th>
				<th>Email</th>
				<th>Contact No.</th> 
				<th>Practice Area</th>
				<th>Location</th>
				
			 
			</tr>
		</thead>
		<tbody>
		@foreach($jobs as $job)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $job->first_name }}</td>
				<td>{{ $job->email }}</td>
				<td>{{ $job->mobile }}</td>
				<td>
					{{ isset($job->practiceArea)? $job->practiceArea->name:''}}
				</td>
				<td>{{ $job->location }}</td>
				
				
			</tr>
			@endforeach
		</tbody>
	</table>

 </div>

        <div class="tab-pane fade" id="jobOpening" role="tabpanel" aria-labelledby="jobOpening-tab">
            <br />
           <table class="table table-bordered">
		<h4><p align="center">Subscribtion Details</p></h4>   
		<thead>
				<tr>
				<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
				<th>Contact No.</th>
				<th>Minimum Experience</th>
				<th>Location</th>
				<th>Practice Area</th>
				
				
			 
			</tr>
		</thead>
		<tbody>
		@foreach($subscription as $company)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{$company->fname}}</td>
				<td>{{$company->lname}}</td>
			<td>{{$company->email}}</td>
				<td>{{$company->contact_no}}</td>
				<td>{{$company->minimum_experience}}</td>
				<td>{{$company->location}}</td>
				<td>{{$company->practice_area}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

            
        </div>
      
    </div>
</div>
@endsection
	
	