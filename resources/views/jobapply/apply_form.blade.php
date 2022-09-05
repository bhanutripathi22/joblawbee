@extends('layouts.template-search')

@section('content')
<section style="padding: 7rem 0 3rem;">
<form method="POST" action="{{ route('apply', $job) }}" enctype="multipart/form-data" id="jobapply_form">
<div class="container">
		<div class="row">
            
			<div class="col-md-10 col-lg-10 offset-1">
                <h3 class="mb-3" style="font-size:1.2rem;"> "{{ $job->practiceArea->name}} | {{ $job->minimum_experience }} Years to {{ $job->maximum_experience }} Years | {{ $job->location }}"</h3>

                
				<div class="row profile-div" style="margin-top: 3%;">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<div class="row mb-6">
						<div class="float-left text-left w-50">
							
						<p class=""><span style="font-size:16px;">Practice Area: </span>{{$job->practiceArea->name}}</p>
								</div>
							<div class="" >
							
						    <p><span style="font-size:16px;">Firm Name:</span><a href="{{ route('company-profile', $job->company) }} " class="job-des-btn">	{{ $job->company->name }}</a></p>
								</div>	</div>

						<div class="row mb-3">
						<div class="float-left text-left w-50">
							
							<span class="d-table-cell"><span style="font-size:16px;">Total Experience:</span> {{ $job->minimum_experience }} Yrs to {{ $job->maximum_experience }} Yrs</span>     
							</div>
							<div class="" >
								
							<p><span style="font-size:12px;">Posted on </span> {{ \Carbon\Carbon::parse($job->created_at)->format('d-m-Y') }}</p></div>
						
                        </div>
                               
                        
						<div class="row mb-3">
                            
                                <span style="font-size:16px;">“Applied for Location:</span><br><br> 
                                
							<div class="col-lg-4 col-md-4 col-sm-12">
                                {{-- <i class="fa fa-map-marker red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell">{{ $job->location }}</span>      --}}
                                @php
                                  $location_multiple =explode(',', $job->location);
                                @endphp
                                 <select class="form-control"  id="multiple_location" name="job_location" >
                                
                           @foreach($location_multiple as $state) 

                              
                                <option @if(old('location') ==  $state) selected @endif value="{{ $state }}">
                                    {{ $state }}</option>
                                 @endforeach 
                            </select>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>


   



<div class="container">
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-10 col-lg-10 offset-1">
                {{-- @if($errors->any())
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                </div>
                @endif --}}
				<div class="row">
                    <div class="col-md-4 ml-auto text-right">
                        <a class="btn btn-link" href="{{ route('welcome') }}" style="color: #e84824;"><i class="fa fa-arrow-left" aria-hidden="true"></i> GO BACK TO HOME</a>
                    </div>
                </div>
				<div class="light-bg p-4">
                 
                        @csrf
                        <div class="w-50 float-left mb-3">
                            <div class="mr-md-2">
                                <label>First Name <span style="color: red;">*</span></label>
                                <input type="text" id="first_name" class="form-control search-form1" placeholder="First Name" name="first_name" value="{{ old ('first_name') }}" required onkeyup="firstname()">
                                <span id="fname" style="color: red; display:block;"></span>
                            </div>
                        </div>
                        <div class="w-50 float-left mb-3"> <span style="color: red;">*</span><label>Last Name</label>
                            <input type="text" id="last_name" class="form-control search-form1" placeholder="Last Name" name="last_name" name="{{ old('last_name')}}" required onkeyup="lastname()">
                            <span id="lname" style="color: red; display:block;"></span>
                        </div>
                          
                        {{-- <div class="w-50 float-left mb-3">
                             <div class="mr-2">
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control search-form1" placeholder="mobile" name="{{ old('mobile') }}">
                        </div>
                        
                    </div> --}}

                         <div class="w-50 float-left mb-3 pr-md-2" style="clear:both; box-sizing: border-box;">
                        
                            <label >Mobile <span style="color: red;">*</span> </label>
                            <div class="row">
                                <div class="col-md-4 col-sm-2 pr-0 mobile-code" >
                                      <div class="mr-md-3">
                                    <input type="text" class="form-control search-form1" name="" placeholder="91+" value=""  >
                                </div>
                              </div>
                                <div class="col-md-8 pl-lg-0 col-sm-4 pl-md-0 moblle-text">
                                  <input type="text" id="mobile_no" name="mobile" class="form-control search-form1" placeholder="mobile" name="{{ old('mobile') }}" required onkeyup="mobilevalidate()">
                                  <span id="nmbr" style="color: red; display:block;"></span>
                                </div>
                            </div>

                        </div> 


                        <div class="w-50 float-left mb-3">
                            <label>Email <span style="color: red;">*</span></label>
                            <input type="text" id="email" class="form-control search-form1" placeholder="Email" name="email" required onkeyup="emailvalidate()">
                             <span id="emailmsg" style="color: red; display:block;"></span>
                        </div>


                        <div class="w-50 float-left mb-3">
                             <div class="mr-md-2">
                            <label>Qualifications(UG)</label>
                            <input type="text" class="form-control search-form1" placeholder="Qualification" name="qualification_ug">
                        </div>
                    </div>

                        <div class="w-50 float-left mb-3">
                            <label>College & Year of Passing</label>
                            <input type="text" class="form-control search-form1" placeholder="" name="clg_passingyear_ug">
                        </div>
                        

                         <div class="w-50 float-left mb-3">
                             <div class="mr-md-2">
                            <label>Qualifications(PG)</label>
                            <input type="text" class="form-control search-form1" placeholder="Qualification" name="qualification_pg">
                        </div> 
                    </div>
                        <div class="w-50 float-left mb-3">
                            <label>College & Year of Passing</label>
                            <input type="text" class="form-control search-form1" placeholder="" name="clg_passingyear_pg">
                        </div>

                        
                        <div class="w-50 float-left mb-3">
                             <div class="mr-md-2">
                            <label>Current Employer</label>
                            <input type="text" class="form-control search-form1" placeholder="Current Employer" name="current_employer">
                        </div>
                    </div>
                        <div class="w-50 float-left mb-3">
                            <label>Practice Area <span style="color: red;">*</span></label>
                            <select class="form-control search-form1" id="practice_area" name="practice_area" required>
                            @foreach($practice_areas as $area)
                                <option @if(old('practice_area') == $area->id) selected="selected" @endif value="{{ $area->id }}" class="{{ $area->type === 'parent' ? 'optionGroup' : 'optionChild' }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>

                          <div class="w-50 mb-3">
                            <label>Current Location <span style="color: red;">*</span></label>
                            <select class="form-control search-form1"  name="location" required>
                                  @foreach($location as $city)
                             <option>{{ $city->name }}</option>
                              @endforeach

                            </select>
                        </div>
                        

                        <div class="w-50 float-left mb-3 pr-md-2" style="clear:both; box-sizing: border-box;">
                        
                            <label>Total Experience <span style="color: red;">*</span></label>
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <select  class="form-control search-form1" name="minimum_experience" value="{{ old('minimum_experience') }}" >
                                          <option disabled default selected> Years</option>
                                          @for($i=1;$i<=40;$i++)
                                    <option>{{$i}}</option>
                                          @endfor
                                      
                                </select>
                                </div>

                                <div class="col-md-2 p-0">
                                    <p class="text-center mb-0" style="line-height: 3;">to</p> 
                                </div>
                                <div class="col-md-4 pl-lg-0 pl-md-0">
                                    <select class="form-control search-form1" name="maximum_experience" value="{{ old('minimum_experience') }}" >
                                 <option disabled default selected>Month</option>
                                 @for($i=1;$i<=12;$i++)
                                    <option>{{$i}}</option>
                                 @endfor
                                        
                                </select>
                                </div>
                            </div>

                        </div> 


                        <div class="w-50 float-left mb-3">
                            <label>Current Salary (per annum)</label>
                            <div class="row">
                                <div class="col-md-6">
                                <input type="text" class="form-control search-form1" placeholder="In Lakhs" name="current_salary_lakh">
                                </div>
                               
                                <div class="col-md-6">
                            <input type="text" class="form-control search-form1" name="current_salary_thousand" id="current" placeholder="In Thousand" value="{{ old('minimum_experience') }}" />
                                </div>
                                
                            </div>
                        </div>
                      

                        {{-- <div class="w-100 float-left mb-3">
                            <label>Current Salary</label>
                            <input type="text" class="form-control search-form1" placeholder="CTC(Per Annum)" name="current_salary">
                        </div> --}}
                        <div class="w-100 float-left mb-3">
                            <label>Additional Details</label>
                            <textarea type="text" class="form-control search-form1" placeholder="Additional Details" name="comment"></textarea>
                        </div>

                        <div class="custom-file mb-3">
                              <label>Upload Resume</label>
                            {{-- <input type="file" class="custom-file-input " id="customFile" name="resume">
                            <label class="custom-file-label search-form1" for="customFile">Upload Resume</label> --}}
                            <input type="file" class="form-control" name="resume" style="height: auto; border-radius: 0; padding: 13px;" required />
                        </div>
                        <button class="btn-red1" type="submit">Submit</button>
                    
				</div>
			</div>
		</div>
    </div>
    


 </form>   
</section>

@endsection


@push('scripts')

<script>

 function firstname() {
        var name = document.getElementById("first_name").value;
          var lname = document.getElementById("fname");
          var haserror = false;
          fname.innerHTML = "";
          var expr = /^[a-zA-Z]+$/;
          if (!expr.test(name)) {
              fname.innerHTML = "Please the valid Name.";
            haserror = true;
        }
      setbuttonstatus(haserror)
      }





    function lastname() {
        var name = document.getElementById("last_name").value;
          var lname = document.getElementById("lname");
          var haserror = false;
          lname.innerHTML = "";
          var expr = /^[a-zA-Z]+$/;
          if (!expr.test(name)) {
              lname.innerHTML = "Please the valid Name.";
            haserror = true;
        }
      setbuttonstatus(haserror)
      }

        function mobilevalidate() {
        var name = document.getElementById("mobile_no").value;
          var nmbr = document.getElementById("nmbr");
          var haserror = false;
          nmbr.innerHTML = "";
           var expr =/^\d{10}$/;
          if (!expr.test(name)) {
              nmbr.innerHTML = "Please the valid No.";
            haserror = true;
        }
      setbuttonstatus(haserror)
      }



       function emailvalidate() {
        var email = document.getElementById("email").value;
        console.log (email);
          var emailmsg = document.getElementById("emailmsg");
          var haserror = false;
          emailmsg.innerHTML = "";
           var expr = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
          if (!expr.test(email)) {
              emailmsg.innerHTML = "Please the valid Email.";
            haserror = true;
        }
      //setbuttonstatus(haserror)
      }

</script>






{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#multiple_location').select2({
       maximumSelectionLength: 5,
    width: '100%', 
    placeholder: 'Select options' 
  });
   // multiple: true,

});
</script> --}}





{{-- <script>
  
    $('#jobapply_form').submit(function(e) {
                e.preventDefault();
                commonSubmit($(this),false,'multipart/form-data');
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

                    const message = `<span style="color: green"><i class="fa fa-check" aria-hidden="true"></i> ${response.message}</span>`;
                    show_custom_alert(message);
                    if (clearForm){
                        formFP.trigger("reset");
                    }
                },
                error: function(data){
                    var errors = data.responseJSON;

                    var showErrors = [];

                    console.log(errors.errors);
                    console.log(Object(errors.errors).length);



                     if(errors.errors !== undefined){
                        // for (let key in errors.errors) {

                        //     console.log("Key: " + key);
                        //      console.log("Value: " + errors.errors[key]);
                        //      //showErrors[key] = errors.errors[key];

                        //     for(let i=0; i<errors.errors[key].length; i++){
                        //         let dynamicKey = key+"_"+i;
                        //         showErrors[i] = errors.errors[key][i];
                        //         console.log(showErrors[i]);
                        //     }

                        // }

                        for (let key in errors.errors) {
                            for(let i=0; i<errors.errors[key].length; i++){
                                let dynamicKey = key+"_"+i;
                                showErrors[i] = errors.errors[key][i];
                                console.log(showErrors[i]);
                            }
                        }
                     } else {
                        showErrors = 'Some error occured.Please try again ';
                        //showErrors=errors.message;
                     }
console.log(showErrors);
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
</script> --}}




@endpush