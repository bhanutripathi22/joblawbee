@extends('layouts.template-search')

@section('content')
 <section>
 <div class="container">
  <div class="row">
   <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top:20%;">
    <div class="row profile-div">
   <div class="col-xs-12 col-md-8 col-lg-8" >
    <h4> {{ $company->name }}</h4>

     <p><i class="fa fa-map-marker red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell">{{  isset($company->profile) ? $company->profile->address1 . ' ' . $company->profile->address2 . ', ' . $company->profile->city . ', ' . $company->profile->state . ',' . $company->profile->pincode : 'Not Available' }}</span></p>

    
         <p><i class="fa fa-address-book red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell">{{ isset($company->profile) ? $company->profile->contact_name . ',' . $company->profile->designation : 'Not Available' }}</span></p>
         
     <p><i class="fa fa-envelope red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell">{{ isset($company->profile) ? $company->profile->email : 'Not Available' }}</span></p> 

      <p><i class="fa fa-phone red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell">{{ isset($company->profile) ? $company->profile->phone : 'Not Available' }}</span></p>

     <p><i class="fa fa-globe red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell">{{ isset($company->profile) ? $company->profile->website : 'Not Available' }}</span></p>
   </div>
   
   <div class="col-xs-12 col-md-4 col-lg-4">
      <img class="img-fluid" src="{{ ($company->profile && $company->profile->logo) ? asset('storage/'.$company->profile->logo) : 'https://ui-avatars.com/api/?background=e84824&color=ffffff&name='.$company->name }}"/>
  </div>
  </div>
  </div>
  </div>
  </div>
 </section>
 <section class="my-5">
    <div class="container">
    <div class="row" data-aos="fade-up">
     <div class="col-md-4 col-lg-4 ml-auto mr-auto">
      <!-- Tabs with Background on Card -->
          <ul class="nav profile-tab mb-4" role="tablist" data-background-color="orange">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#firm" role="tab"><i class="fa fa-building-o pr-2 d-table-cell red-text ft-20"></i> <span class="d-table-cell">Firm Profile</span></a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#lawyer" role="tab"><i class="fa fa-user-o pr-2 d-table-cell red-text ft-20"></i> <span class="d-table-cell">Profiles</span></a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#press" role="tab"><i class="fa fa-id-card-o pr-2 d-table-cell red-text ft-20"></i> <span class="d-table-cell">Press Releases</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#job" role="tab"><i class="fa fa-briefcase pr-2 d-table-cell red-text ft-20"></i> <span class="d-table-cell">Job Opening</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#contact" role="tab"><i class="fa fa-phone pr-2 d-table-cell red-text ft-20"></i> <span class="d-table-cell">Contact Us</span></a>
            </li>
          </ul>
        </div>
        <div class="card-body col-md-8 col-lg-8 pt-0">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="firm" role="tabpanel">
              <h3  class="mt-0 pb-1">Firm Profile</h3>
              {!! isset($company->profile) ? $company->profile->profile_text : '' !!}
            </div>
            {{-- <div class="tab-pane" id="lawyer" role="tabpanel">
              @foreach($company->lawyerProfiles as $lawyer_profile)
                {!! $lawyer_profile->profile_text !!}
              @endforeach
            </div> --}}
            <div class="tab-pane" id="press" role="tabpanel">
              <h3  class="mt-0 pb-1">Press Releases</h3>
              
              @foreach($company->pressReleases as $press)
              <div class="row">
              <div class="col-md-6">
              <p> <i class="fa fa-circle" aria-hidden="true" style="color: #e84824;">&nbsp;&nbsp;<a href="{{ route('pressrelease',  $press) }} " class="job-des-btn ">  {{$press->tittle }} </i></a></p>
              </div>
              {{-- <div class="col-md-6">
              <p> {!!$press->press_text!!}</p>
              </div> --}}
            </div>
            @endforeach
            </div>



            <div class="tab-pane" id="job" role="tabpanel">
              <h3  class="mt-0 pb-1">Job Opening</h3>
              @if($company->openings->count() > 0)
              @foreach($company->openings()->latest()->get() as $job)
                <div class="row border p-3 mb-2 tab-text-align">
                  <div class="col-xs-12 col-md-1">
                    <img class="img-fluid" src="{{ $company->profile ? asset('storage/'.$company->profile->logo) : asset('template/images/logo-placeholder.png') }}"></div>
                
                  <div class="col-xs-12 col-md-5">
                      <p><i class="fa fa-map-marker red-text" aria-hidden="true"></i> {{ $job->location }}</p>
                  </div>
                  <div class="col-xs-12 col-md-3">
                      <a class="job-des-btn" href="{{ route('job-show', $job) }}">Job Description</a>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <a href="{{ route('apply-form', $job) }}" class="btn-red">Apply Now</a>
                  </div>
                </div>
              @endforeach
              @else
                  <h2>No Jobs Found</h2>
              @endif
            </div>
            <div class="tab-pane" id="contact" role="tabpanel">
              <h3  class="mt-0 pb-1">Contact Us</h3>
                <p><i class="fa fa-map-marker red-text d-table-cell pr-2" aria-hidden="true"></i> 
                  <span class="d-table-cell">{{ isset($company->profile) ? $company->profile->address1 . ' ' . $company->profile->address2 . ', ' . $company->profile->city . ', ' . $company->profile->state : '' }}</span></p>
                <p><i class="fa fa-phone red-text d-table-cell pr-2" aria-hidden="true"></i> 
                  <span class="d-table-cell">{{ isset($company->profile) ? $company->profile->phone : '' }}</span></p>
                <p><i class="fa fa-envelope red-text d-table-cell pr-2" aria-hidden="true"></i>
                  <span class="d-table-cell">{{ $company->email }}</span></p>
                <p><i class="fa fa-globe red-text d-table-cell pr-2" aria-hidden="true"></i>
                  <span class="d-table-cell">{{ isset($company->profile) ? $company->profile->website : '' }}</span></p>
            </div>
          </div>
      <!-- End Tabs on plain Card -->
    </div>
    </div>
  </div>
 </section>
@endsection
