@extends('company.layouts.template')

@section('content')
<div class="container my-5">
    <a style="color: #e84824" href="{{ route('company.profile.show', Auth::guard('company')->user()) }}"><< Go Back</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Job Applications</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Location</th>
                                <th>Experience</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($job->applications as $application)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $application->first_name }}</td>
                                <td>{{ $application->last_name }}</td>
                                <td>{{ $application->location }}</td>
                                <td>{{ $application->minimum_experience . 'Yrs' . ' - ' . $application->maximum_experience . 'Yrs' }}</td>
                                <td><a class="btn btn-default" style="background-color: #e84824; color: #fff; border: 1px solid #e84824" target="_blank" href="{{ asset("storage/{$application->resume}") }}">Download Resume</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection