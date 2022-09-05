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

   #social-links > ul > li {
      display:inline-block;
      list-style:none;
   }

   #social-links > ul > li .social-button {
      font-size: 18px;
      margin-right: 10px;
      color: #e84824;
   }
</style>
@endsection
@section('content')
<div class="container my-5">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" id="lawyerProfile-tab" data-toggle="tab" href="#lawyerProfile" role="tab" aria-controls="lawyerProfile" aria-selected="false">Firm Profile</a>
      </li>
      {{--
      <li class="nav-item">
         <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"></a>
      </li>
      --}}
      {{--
      <li class="nav-item">
         <a class="nav-link" id="firmProfile-tab" data-toggle="tab" href="#firmProfile" role="tab" aria-controls="firmProfile" aria-selected="false">Firm Profile</a>
      </li>
      --}}
      {{--
      <li class="nav-item">
         <a class="nav-link" id="pressRelease-tab" data-toggle="tab" href="#pressRelease" role="tab" aria-controls="pressRelease" aria-selected="false">Press Release</a>
      </li>
      --}}
      <li class="nav-item dropdown">
         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         Press Release<span class="caret"></span>
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a id="pressRelease-tab"  data-toggle="tab"  class="dropdown-item" href="#pressRelease">Add New</a>
            <a id="pressReleaseview-tab"  data-toggle="tab"  class="dropdown-item" href="#pressReleaseview">View All</a>
            </a>
         </div>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="jobOpening-tab" data-toggle="tab" href="#jobOpening" role="tab" aria-controls="jobOpening" aria-selected="false">Job Posting</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="jobPosted-tab" data-toggle="tab" href="#jobPosted" role="tab" aria-controls="jobPosted" aria-selected="false">Job Posted</a>
      </li>
   </ul>
   <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="lawyerProfile" role="tabpanel" aria-labelledby="lawyerProfile-tab">
         <br />
         {{--
         <h2>Profile</h2>
         --}}
         <form id="company-profile" method="POST" action="{{ route('company.profile.store', $company) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Company Name</label>
                     <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" placeholder="Company Name" value="{{ Auth::guard('company')->user()->name ?? old('company_name') }}" readonly />
                     @error('city')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Contact Person</label>
                     <input type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" placeholder="Person Name" value="{{ $company->contact_person_name ?? old('contact_name') }}" />
                     @error('city')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Designation</label>
                     <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" placeholder="Designation" value="{{ $company->profile->designation ?? old('designation') }}" />
                     @error('state')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Email ID</label>
                     <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ Auth::guard('company')->user()->email ?? old('email') }}" />
                     @error('state')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>
            <div class="form-group" style="margin-top:3%;">
               <label>Address1</label>
               <input type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" placeholder="Address 1" value="{{ $company->profile->address1 ?? old('address1') }}" />
               @error('address1')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label>City</label>
                     <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{ $company->profile->city ?? old('city') }}" />
                     @error('city')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>State</label>
                     <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" placeholder="State" value="{{ $company->profile->state ?? old('state') }}" />
                     @error('state')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Pincode</label>
                     <input type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" placeholder="Pincode" value="{{ $company->profile->pincode ?? old('pincode') }}" />
                     @error('pincode')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Mobile No.</label>
                     <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ $company->phone ?? old('phone') }}" />
                     @error('phone')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Website</label>
                     <input type="url" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Website" value="{{ $company->profile->website ?? old('website') }}" />
                     @error('website')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Logo</label>
                     <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" placeholder="Logo" style="height: auto" >
                     {{-- @if(!(isset($company->profile) && $company->profile->logo)) required @endif  --}}
                     @error('logo')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <textarea class="form-control tinymce" name="profile_text" rows="15">{{ $company->profile->profile_text ?? old('profile_text') }}</textarea>
                  </div>
               </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
         {{--
         <h2>Personal Information </h2>
         --}}
         <div class="row" style="margin-top:3%;">
            <div class="card-body">
               <form method="POST" action="{{ route('company.changepassword',$company) }}">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                     <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                     <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                     <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                     </div>
                  </div>
                  <div class="form-group row mb-0">
                     <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                        {{ __('Change') }}
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      {{--
      <div class="tab-pane fade" id="firmProfile" role="tabpanel" aria-labelledby="firmProfile-tab">
         <br/>
         <h2>Firm Profile</h2>
         <form id="firm-profile" method="POST" action="{{ route('company.firm.profile.store', $company) }}">
            @csrf
            <div class="form-group">
               <textarea class="form-control tinymce" name="profile_text" rows="15">{{ $company->firmProfile ? $company->firmProfile->profile_text : '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
      </div>
      --}}
      {{--
      <div class="tab-pane fade show active" id="lawyerProfile" role="tabpanel" aria-labelledby="lawyerProfile-tab">
         <br/>
      </div>
      --}}
      <div class="tab-pane fade" id="pressRelease" role="tabpanel" aria-labelledby="pressRelease-tab">
         <br/>
         {{--
         <h2>Press Release</h2>
         --}}
         <form id="press-release" method="POST" action="{{ route('company.press.release.store', $company) }}">
            @csrf
            <div class="form-group">
               <label>Tittle</label>
               <input type="text" class="form-control" name="tittle" >
            </div>
            <div class="form-group">
               <textarea class="form-control tinymce" name="press_text" rows="15"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
      </div>
      <div class="tab-pane fade" id="pressReleaseview" role="tabpanel" aria-labelledby="pressReleaseview-tab">
         <br/>
         {{--
         <h2>Press Release</h2>
         --}}
         <div class="row" style="margin-top:3%;">
            <div class="col-md-12">
               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Title</th>
                           <th>Press Release</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($company->pressReleases as $press)
                        <tr>
                           <td>{{ $loop->iteration }}</td>
                           <td>{{ $press->tittle }}</td>
                           <td>{!! $press->press_text !!}</td>
                           <td>
                              <a href="{{route('company.PressRelease.edit_show', ['pressrelease'=>$press])}}" class="btn btn-info fa fa-edit"></a>
                           </td>
                           <form method="POST" action="{{route('company.PressRelease.delete', ['pressrelease'=>$press])}}">
                              @csrf
                              @method('delete')
                              <td><button type="submit"  class="btn btn-info fa fa-trash-o"></button> </td>

            </form>
            </tr>
            @endforeach
            </tbody>
            </table>
          </div>
       </div>
         </div>
      </div>
      <div class="tab-pane fade" id="jobOpening" role="tabpanel" aria-labelledby="jobOpening-tab">
         <br />
         {{--
         <h2>Job Opening</h2>
         --}}
         <form id="job-opening" method="POST" action="{{ route('company.job.opening.store', $company) }}">
            @csrf
            <div class="row" style="margin-top:3%;">
               {{--
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Job Title <span style="color: red;">*</span></label>
                     <input type="text" class="form-control alpha-only @error('title') is-invalid @enderror" name="title" placeholder="" value="{{ old('title') }}" />
                     @error('title')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                     <span class="alpha-error"></span>
                  </div>
               </div>
               --}}
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Practice Area<span style="color: red;">*</span></label>
                     <select class="form-control" name="practice_area" id="practice_area" required>
                     @foreach($practice_areas as $area)
                     <option @if(old('practice_area') == $area->id) selected="selected" @endif value="{{ $area->id }}">{{ $area->name }}</option>
                     @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-2"></div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Designation <span style="color: red;">*</span></label>
                     <input type="text" class="form-control alpha-only @error('designation') is-invalid @enderror" name="designation" placeholder="" value="{{ old('designation') }}" required>
                     @error('designation')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                     <span class="alpha-error"></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Location <span style="color: red;">*</span></label>
                     <select class="form-control @error('location') is-invalid @enderror"  id="multiple_location" name="location[]" multiple="multiple" required>
                     @foreach($location as $locate)
                     <option @if(old('location') == $locate->name) selected @endif value="{{ $locate->name }}">{{ $locate->name }}</option>
                     @endforeach
                     </select>
                     @error('location')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-2"></div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Years of Experience <span style="color: red;">*</span></label>
                     <div class="row">
                        <div class="col-md-4 col-xl-3 pr-xl-0">
                           <select  class="form-control  @error('minimum_experience') is-invalid @enderror" name="minimum_experience"   required>
                              <option disabled selected>Min</option>
                              @for($i=1; $i<=40; $i++)
                              <option>{{$i}}</option>
                              @endfor
                           </select>
                           @error('minimum_experience')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                           <span class="num-error"></span>
                        </div>
                        <div class="col-md-1 p-0">
                           <p class="text-center mb-0" style="line-height: 3;">to</p>
                        </div>
                        <div class="col-md-4 col-xl-3 pl-xl-0">
                           <select  class="form-control @error('minimum_experience') is-invalid @enderror" name="maximum_experience"   required>
                              <option disabled selected>Max</option>
                              @for($i=1; $i<=40; $i++)
                              <option>{{$i}}</option>
                              @endfor
                           </select>
                           @error('minimum_experience')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                           <span class="num-error"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Key Skills <span style="color: red;">*</span></label>
                     <select class="form-control @error('key_skills') is-invalid @enderror"  id="multipleselect"  name="key_skills[]" multiple="multiple" required>
                        @foreach($skills as $skill)
                        <option style="font-size:1rem;">{{ $skill->name}}</option>
                        @endforeach
                     </select>
                     @error('key_skills')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-2"></div>
               <div class="col-md-5">
                  <label>No. of Vacancies <span style="color: red;">*</span></label>
                  <input type="text" name="no_of_vacancies" class="form-control num-only @error('no_of_vacancies') is-invalid @enderror" required>
                  @error('no_of_vacancies')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <span class="num-error"></span>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Type <span style="color: red;">*</span></label>
                     <select type="text" class="form-control" name="type"  value="" >
                        <option value="full_time">Full Time</option>
                        <option value="part_time">Part Time</option>
                        <option value="work_from_home">Work From Home</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="non-industry-stardards-block" style="width: 100%; display: none;">
                  <div class="col-md-3 col-sm-12">
                     <div class="form-group">
                        <label>Salary Range (Min) <span style="color: red;">*</span></label>
                        <input id="ms-text-field" type="text" style="width:67%;" class="form-control num-only @error('min_salary') is-invalid @enderror" name="min_salary" id="mini" placeholder="Salary" value="{{ old('min_salary') }}"  >
                        @error('min_salary')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="num-error"></span>
                        <p style="font-size: 0.65rem;">
                           <label>
                           <input type="checkbox" name="hide_salary" id="hidesalaryfield"  value="yes" @if(old('hide_salary') == "yes") checked @endif/>
                           Hide Salary from Publication
                           </label>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-12">
                      <label style="visibility: hidden;">Salary Range (Min) <span style="color: red;">*</span></label>
                     <select type="text"  style="width:67%;" id="amountmini" class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="min_amount"  value="" >
                        <option>Lakh per Annum</option>
                        <option>Crore per Annum</option>
                     </select>
                  </div>
                  <p style="margin-top:3%; margin-right: 3%; text-align:center;">to</p>
                  <div class="col-md-3 col-sm-12" >
                     <div class="form-group">
                        <label>Salary Range (Max)</label>
                        <input type="text" style="width:67%;" id="max_salary" class="form-control num-only @error('max_salary') is-invalid @enderror" name="max_salary" placeholder="Salary" value="{{ old('max_salary') }}" @if(old('hide_salary') == "yes") readonly @endif />
                        @error('max_salary')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="num-error"></span>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-12" style="margin-top: 1.5%;">
                     <div class="form-group" style="margin-top: 10px;">
                        <select type="text"   class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="max_amount"  style="width:67%;" value="" id="amountmax" @if(old('hide_salary') == "yes") disabled @endif>
                           <option>Lakh per Annum</option>
                           <option>Crore per Annum</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 non-industry-stardards-block" style="display: none; margin-top: -18px;">
                  <div style="display: flex; width: 100%;">OR</div>
               </div>
               <div class="col-md-12">
                  <label>
                  As the Industry Norms
                  <input type="checkbox" id="as-per-industry-standards"  checked/>
                  </label>
                  <div id="industry-standards-block">
                     <input type="hidden" id="ms-hidden-field" name="min_salary" value="as per industry standards" />
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label>Job Description <span style="color: red;">*</span></label>
               <textarea class="form-control tinymce @error('description') is-invalid @enderror" name="description" ></textarea>
               @error('description')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
      </div>
      <div class="tab-pane fade" id="jobPosted" role="tabpanel" aria-labelledby="jobPosted-tab">
         <br/>
         {{--
         <h2>All Openings</h2>
         --}}
         <div class="row" style="margin-top:3%;">
            <div class="col-md-12">
               <div class="table-responsive">
                  <table class="table table-striped ">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Practice Area</th>
                           <th>Location</th>
                           <th>Status</th>
                           <th>Action</th>
                           <th>Share</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($company->openings as $opening)
                        <tr>
                           <td style="width:5%;">{{ $loop->iteration }}</td>
                           <td style="width:35%;"><a href="{{ route('show-applications', $opening) }}">{{ $opening->PracticeArea->name }}</a></td>
                           {{--
                           <td>{{ $opening->salary }}</td>
                           --}}
                           <td style="width:25%;">{{ $opening->location }}</td>
                           <td style="width:5%;">{{ $opening->status===1 ? 'Active' : 'Deactive' }}</td>
                           <td style="width:15%;">
                              <a href="{{ route('job-edit', $opening) }}" class="btn btn-primary btn-sm fa fa-edit"></a>
                              <form style="display: inline-block" method="POST" action="{{ route('job-update-status', $opening) }}">
                                 @csrf
                                 @method('PUT')
                                 <input type="hidden" name="status" value="{{ $opening->status===1 ? 0 : 1 }}">
                                 <button type="submit" class="btn btn-primary btn-sm">{{ $opening->status===0 ? 'Active' : 'Deactive' }}</button>
                              </form>
                           </td>
                           <td style="width:15%;">
                             <div id="social-links">
                                @php $url = route('job-show', $opening); $text = "Check out the job posted under " . $opening->PracticeArea->name . " practice area"; @endphp
                                 <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" class="social-button " id=""><span class="fa fa-facebook-official"></span></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?text={{ $text }}&amp;url={{ $url }}" class="social-button " id=""><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $url }}&amp;title={{ $text }}&amp;summary={{ $text }}" class="social-button " id=""><span class="fa fa-linkedin"></span></a></li>    
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div></div></div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#multipleselect').select2({
       width: '100%',
       placeholder: 'Select options'
     });
      // multiple: true,

   });
</script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#multiple_location').select2({
          maximumSelectionLength: 5,
       width: '100%',
       placeholder: 'Select options'
     });
      // multiple: true,

   });
</script>
<script>
   $(document).ready(function() {

       $('#company-profile').submit(function(e) {
           // e.preventDefault();
           // commonSubmit($(this), 'multipart/form-data');
           submitBtn = $('button[type=submit]', $(this));
           submitBtn.prop('disabled', 'disabled');
       });

       $('#firm-profile').submit(function(e) {
           e.preventDefault();
           commonSubmit($(this));
       });

       $('#press-release').submit(function(e) {
           e.preventDefault();
           commonSubmit($(this));
       });

       $('#lawyer-profile').submit(function(e) {
           e.preventDefault();
           commonSubmit($(this));

       });

       $('#job-opening').submit(function(e) {
           e.preventDefault();
           commonSubmit($(this), true);
       });

       $("#btn-add-more-lawyer-profiles").on("click", function(e) {
           $("#add-more-lawyer-profiles").append(`<div class="form-group">
               <textarea class="form-control tinymce" name="profile_text[]" rows="15"></textarea>
           </div>`);
       });

       function commonSubmit(currentForm, clearForm=false, enctype = 'application/x-www-form-urlencoded') {
           var formFP = currentForm;
           var submitButton = $('button[type=submit]', formFP);
           // console.log(enctype);
           $.ajax({
           type: 'POST',
           enctype: enctype,
           url: formFP.prop('action'),
           processData: false,
           data: formFP.serialize(),
           success: function(response){

               console.log(response);


               if(response.type === "job_posted"){
                  window.location.href="{{ route('company.job.posted.show', $company) }}"
               }

               const message = `<span style="color: green"><i class="fa fa-check" aria-hidden="true"></i> ${response.message}</span>`;
               show_custom_alert(message);
               if (clearForm){
                   formFP.trigger("reset");
               }
           },
           error: function(data){
               var errors = data.responseJSON;
               var showErrors = [];

               console.log(errors);



                if(errors.errors !== undefined){
                   for (let key in errors.errors) {

                       // console.log("Key: " + key);
                       // console.log("Value: " + errors.errors[key]);

                       for(let i=0; i<errors.errors[key].length; i++){
                           let dynamicKey = key+"_"+i;
                           showErrors[i] = errors.errors[key][i];
                       }

                       // console.log(showErrors);
                   }
                } else {
                   showErrors = 'Some error occured.Please try again ';
                   //showErrors=errors.message;
                }

               const message = `<span style="color: red"> ${showErrors}</span>`;
               show_custom_alert(message);
               submitButton.prop('disabled', false);
           },
           beforeSend: function() {
               submitButton.prop('disabled', 'disabled');
           }
           }).done(function(data) {
               submitButton.prop('disabled', false);
           });
       }




       $('#practice_area').change(function(){
           var value = $(this).val();
           // var _token = '{{ csrf_token() }}';
           var url = '{{ route("api.sub-practice-areas", ":practice_area") }}';

           url = url.replace(":practice_area", value);
           $("#sub_practice_area").html('');

           $.ajax({
               url: url,
               method: "POST",
               data: { practice_area: value },
               success: function(response)
               {
                   // console.log(response);
                   const sub_practice_areas = response.sub_practice_areas;
                   if(sub_practice_areas.length > 0){
                       for(i = 0; i<sub_practice_areas.length; i++){
                           // console.log(sub_practice_areas[i]);
                           $("#sub_practice_area").append(`<option value="${sub_practice_areas[i].id}">${sub_practice_areas[i].name}</option>`);
                       }
                   } else {
                       $("#sub_practice_area").append('<option value="0">No subcategory under this category</option>');
                   }

               }
           });

       });

       $("#as-per-industry-standards").on("change", function() {


           if($(this).is(":checked")){

               $("#industry-standards-block").show();
                 $(".non-industry-stardards-block").attr('style','display:none!important');
            //   $("#non-industry-stardards-block").hide();
               // $("#ms-hidden-field").attr('disabled', false);
               // $("#ms-text-field").attr('disabled', true);

           } else {
               // console.log("unchecked");
               $(".non-industry-stardards-block").css('display', 'flex');
               $("#industry-stardards-block").hide();
               // $("#ms-hidden-field").attr('disabled', true);
               // $("#ms-text-field").attr('disabled', false);
               $("#hidesalaryfield").prop('checked',false);
           }
       });



         $("#hidesalaryfield").on("change", function() {


           if($(this).is(":checked")){

               $("#industry-standards-block").show();
               //  $("#ms-text-field").attr('readonly', true);
               $("#max_salary").attr('readonly', true);

                $("#amountmax").attr('disabled', true);
               //   $("#amountmini").attr('disabled',true);

               //  $("#amountmini").attr('readonly', true);
               //  $("#amountmax").attr('readonly', true);
               // $("#non-industry-stardards-block").hide();
               // $("#ms-hidden-field").attr('disabled', false);
               // $("#ms-text-field").attr('disabled', true);
           } else {

               $(".non-industry-stardards-block").css('display', 'flex');
               $("#industry-stardards-block").hide();
                  // $("#ms-text-field").attr('readonly', false);
               $("#max_salary").attr('readonly', false);

                  $("#amountmax").attr('disabled', false);
               //   $("#amountmini").attr('disabled',false);
                   // $("#amountmini").attr('readonly', false);
               //   $("#amountmax").attr('readonly', false);

               // $("#ms-hidden-field").attr('disabled', true);
               // $("#ms-text-field").attr('disabled', false);
           }
       });

   });
</script>
@endpush
