@extends('company.layouts.template')

@section('styles')    
<style>
.optionGroup {
    font-weight: bold;
    font-style: italic;
}
    
.optionChild {
    padding-left: 15px;
}
</style>
@endsection

@section('content')
<div class="container my-5">
    <h2>Jobs Posted</h2>
    <div class="table-responsive">
    <table class="table table-striped " >
        <thead>
            <tr>
                <th>#</th>
                <th>Practice Area</th>
                <th>Location</th>
                <th>Status</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @if($company->openings->count() > 0)
            @foreach($company->openings()->latest()->get() as $opening)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="{{ route('show-applications', $opening) }}">{{ $opening->PracticeArea->name }}</a></td>
               
                <td>{{ $opening->location }}</td>
                <td>{{ $opening->status===1 ? 'Active' : 'Deactive' }}</td>
                <td><a href="{{ route('job-edit', $opening) }}" class="btn btn-primary btn-sm fa fa-edit"></a></td>
                <td>
                    <form style="display: inline-block" method="POST" action="{{ route('job-update-status', $opening) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="{{ $opening->status===1 ? 0 : 1 }}">
                        <button type="submit" class="btn btn-primary btn-sm">{{ $opening->status===0 ? 'Active' : 'Deactive' }}</button>
                    </form>
                </td>
                <td>
                    <a target="_blank" href="{{ route('job-show', $opening) }}" class="btn btn-primary btn-sm">Preview</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center">No Jobs Found. <a style="text-decoration: underline;" href="{{ route('company.profile.show', auth()->guard('company')->user()) }}">Add Job Here</a></td>
            </tr>
            @endif
        </tbody>
    </table>
    </div>
</div>
@endsection