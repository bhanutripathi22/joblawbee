@extends('layouts.template-admin')


@section('content')
    <div class="container my-5">
        <table class="table table-bordered">
         <h4><p align="center">Company Details</p></h4>   
            <thead>
                    <tr>
                    <th>#</th>
                    <th>company Name </th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
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