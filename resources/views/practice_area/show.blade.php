@extends('company.layouts.template')

@section('content')
<div class="container my-5">
    <div class="row">
		<div class="col-md-12 col-lg-12">
            
            <h4 class="text-center">Jobs under {{ $practiceArea->name }}</h4>

            <div class="card-body mt-4">
                <!-- Tab panes -->
                <div class="tab-content text-center">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        @if($practiceArea->openings->count() > 0)
                        @foreach($practiceArea->openings()->latest()->get() as $job)
                        <div class="row border p-3 mb-2 tab-text-align">
                            <div class="col-xs-12 col-md-1"><img class="img-fluid" src="{{ ($job->company->profile && $job->company->profile->logo) ? asset('storage/'.$job->company->profile->logo) : 'https://ui-avatars.com/api/?background=e84824&color=ffffff&name='.$job->company->name }}"></div>
                        
                            <div class="col-xs-12 col-md-5 text-left">
                                <p><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
                            </div>
                            <div class="col-xs-12 col-md-3">
                          <a class="job-des-btn" href="{{ route('job-show', $job) }}">Job Description</a></div>
                          <div class="col-xs-12 col-md-3"><a href="{{ route('apply-form', $job) }}" class="btn-red">Apply Now</a> 
                        
                        </div>
                            </div>
                            
                        @endforeach
                        @else
                            <h2>No Jobs Found</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-4 col-lg-4 side-bar">

        </div> --}}
    </div>
</div>

@endsection

