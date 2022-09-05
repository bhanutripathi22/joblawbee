@extends('layouts.template')


@section('content')
    <div class="container my-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Salary</td>
                    <td>Location</td>
                    <th>Experience</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $loop->Title }}</td>
                    <td>{{ $company->salary }}</td>
                    <td>{{ $company->Location }}</td>
                    <td>{{ $company->Experience }}
                        <form method="POST" action="{{ route('admin.companies.update', $company) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="{{ $company->status}}">
                            
                       
                         
                      </td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection