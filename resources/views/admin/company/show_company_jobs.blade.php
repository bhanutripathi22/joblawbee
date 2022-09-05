@extends('layouts.template-admin')


@section('content')
    <div class="container my-5">
        <table class="table table-bordered">
         <h4><p allign="center">Job Details</p></h4>   
            <thead>
                    <tr>
                    <th>#</th>
                    {{-- <th>company Name </th> --}}
                    {{-- <th>Job Title</th> --}}
                     <th>Practice Area</th>
                    <th>Designation</th>
                   
                    <th>Location</th>
                    <th>Salary</th>
                    <th>Status</th>
                     <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $job->company->name }}</td> --}}
                    {{-- <td>{{ $job->title }}</td> --}}
                     <td>{{ $job->practiceArea->name }}</td>
                    <td>{{ $job->designation }}</td>
                   
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->salary }}</td>
                    <td> 
                        <form method="post" action="{{ route('admin-subscriptiion-mail', $job) }}">
                            @csrf
                            <button type="submit" class="btn btn-success">Send Subscription Mail</button>
                        </form>
                    </td>

                    <td>{{ $job->status===1 ? 'Active' : 'Deactive' }}
					<form method="POST" action="{{ route('admin.job.update', $job) }}">
						@csrf
						@method('PUT')
						<input type="hidden" name="status" value="{{ $job->status===1 ? 0 : 1 }}">
						<button type="submit" class="btn btn-primary">{{ $job->status===0 ? 'Active' : 'Deactive' }}</button>
						</form>
						
					</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection