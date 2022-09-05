@extends('company.layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10 mt-5 mb-5">
                <form method="POST" action="{{ route('job-update', $job) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <div class="form-group">
                                <label>Job Title <span style="color: red;">*</span></label>
                                <input type="text" class="form-control alpha-only @error('title') is-invalid @enderror" name="title" placeholder="" value="{{ old('title') ?? $job->title }}" required />
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="alpha-error"></span>
                            </div> --}}
                            <div class="form-group">
                                <label>Practice Area <span style="color: red;">*</span></label>
                                <select class="form-control" name="practice_area" id="practice_area" required>
                                    @foreach($practice_areas as $area)
                                    <option @if($job->practice_area == $area->id) selected="selected" @endif value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation <span style="color: red;">*</span></label>
                                <input type="text" class="form-control alpha-only @error('designation') is-invalid @enderror" name="designation" placeholder="" value="{{ old('designation') ?? $job->designation }}" required />
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
                             <div class="col-md-6">
                        <div class="form-group">
                            <label>Location <span style="color: red;">*</span></label>
                            <select class="form-control @error('location') is-invalid @enderror"  id="multiple_location" name="location[]" multiple="multiple">

                                @php
                                $locate =  explode(",", $job->location) 
                                @endphp
                                <option disabled>Location</option>
                                @foreach($location as $locations)
                                <option @if(in_array($locations->name,$locate)) selected @endif value="{{ $locations->name }}">{{ $locations->name }} </option>
                                @endforeach
                            </select>

                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    


                  <div class="col-md-6">
                        <div class="form-group">
                            <label>Years of Experience <span style="color: red;">*</span></label>
                            <div class="row" style="margin-left:1px;">
                             <div class="col-md-4 col-xl-2 pr-xl-0" style="padding-left:inherit; padding-right:0px;">
                            <select type="text" class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="minimum_experience"  value="{{ old('minimum_experience') }}" />
                             
                            <option>Min</option>
                             @for($i=1; $i<=40; $i++)
                            <option @if ($job->minimum_experience==$i) selected @endif value={{$i }}>{{$i}}</option>
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
                              <div class="col-md-4 col-xl-2 pr-xl-0" style="padding-right: inherit; padding-left:0px;">

                            <select  class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="maximum_experience"  value="{{ old('minimum_experience') }}" />
                              
                            <option>Max</option>
                             @for($i=1; $i<=40; $i++)
                            <option  @if ($job->maximum_experience==$i) selected @endif value={{ $i }}>{{ $i }}</option>
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

                      <div class="col-md-6">
                      <div class="form-group">
                           <label>Key Skills <span style="color: red;">*</span></label>
                            <select class="form-control @error('key_skills') is-invalid @enderror"  id="multipleselect"  name="key_skills[]" multiple="multiple">
                                @php
                               $keyskills = explode(",", $job->key_skills);
                                    ?>
                                    
                                @endphp
                              
                                @foreach($skills as $skill)

                              
                                     <option @if (in_array($skill->name, $keyskills )) selected @endif value="{{ $skill->name}}">{{ $skill->name}}</option>
                              
                        
                              @endforeach

                            </select>

                          <!-- @error('key_skills')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror -->
                      </div>
                  </div>

                

                      <div class="col-md-6">
                    <label>No. of Vacancies <span style="color: red;">*</span></label>
                    <input type="text" name="no_of_vacancies" class="form-control num-only @error('no_of_vacancies') is-invalid @enderror" value="{{  $job->no_of_vacancies }}" />
                    @error('no_of_vacancies')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="num-error"></span>
                </div> 
            </div> 
                    <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Type <span style="color: red;">*</span></label>
                            <select type="text" class="form-control" name="type"  value="" >
                                    <option @if($job->type=='full_time') selected='selected' @endif  value="full_time">Full Time</option>
                                    <option  @if($job->type=='part_time') selected='selected' @endif value="part_time">Part Time</option>
                                    <option @if($job->type=='work_from_home') selected='selected' @endif value="work_from_home">Work From Home</option>
                                      
                                 </select>
                            </div>
                  </div></div>
                    
                    {{-- <div class="row">

                        <div class="col-md-12">
                                <label>
                                 As the Industry Norms
                                <input type="checkbox" id="as-per-industry-standards" @if($job->min_salary == 'as per industry standards') checked @endif />
                            </label>
        
                            <div id="industry-standards-block" @if($job->min_salary != 'as per industry standards') style="display: none" @endif>
                                <input type="hidden" id="ms-hidden-field" style="width:67%;" name="min_salary" value="as per industry standards" @if($job->min_salary != 'as per industry standards') disabled @endif />
                            </div>
                        </div>

                        <div id="non-industry-stardards-block" style="width: 100%; @if($job->min_salary == 'as per industry standards') display: none; @else display: flex; @endif">
                           <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label>Salary Range (Min) <span style="color: red;">*</span></label>
                                    <input id="ms-text-field" type="text" class="form-control num-only @error('min_salary') is-invalid @enderror" name="min_salary" style="width:80%;"  placeholder="In Lakh" value="{{ old('min_salary') ?? $job->min_salary }}" @if($job->min_salary == 'as per industry standards') disabled @endif />
                                    @error('min_salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="num-error"></span>
                                    <p style="font-size: 0.65rem;">
                                        <label>
                                            <input type="checkbox" name="hide_salary" id="hidesalaryfield" value="yes" />
                                            Hide Salary from Publication
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                   <label style="visibility: hidden;">Min Exp</label>
                                     <select type="text"  id="amountmini" class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="max_amount"  style="width:80%;" value="{{ $job->min_amount  }}">
                               <option @if($job->min_amount=='lakh per Annum') selected='selected' @endif value="lakh per Annum">lakh per Annum</option>
                                 <option @if($job->min_amount=='Crore per Annum') selected='selected' @endif value="Crore per Annum">Crore per Annum</option>
                         </select>
                                   
                                      
                                    @error('min_salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="num-error"></span>
                                    <span class="num-error"></span>
                                    <p>
                                   </p>
                                </div>
                            </div>
                        <p style="margin-top:3%; margin-right: 3%; text-align:center;">TO</p>
                             <div class="col-md-3 col-sm-12" >
                                <div class="form-group">
                                    <label>Salary Range (Max)</label>
                                    <input type="text" style="width:80%;" class="form-control num-only @error('max_salary') is-invalid @enderror" name="max_salary" id="max_salary" placeholder="In Lakh (Per annum)" value="{{ old('max_salary') ?? $job->max_salary }}" />
                                    @error('max_salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="num-error"></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label style="visibility: hidden;">Max Exp</label>
                                      <select type="text" id="amountmax" style="width:80%;"  class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="min_amount"  value="" >
                                <option @if($job->max_amount=='lakh per Annum') selected='selected' @endif value="lakh per Annum">lakh per Annum</option>
                                <option  @if($job->max_amount=='Crore per Annum') selected='selected' @endif value="Crore per Annum">Crore per Annum</option>
                         </select>
                               
                                   
                                      
                                    @error('max_salary')
                                    
                                         <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="num-error"></span>
                                </div>
                            </div>
                        </div>

                    
                    </div> --}}
                    <div class="row">
                        <div class="non-industry-stardards-block" style="width: 100%; @if($job->min_salary == 'as per industry standards') display: none; @else display: flex; @endif">
                            <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Salary Range (Min) <span style="color: red;">*</span></label>
                                <input id="ms-text-field" type="text" style="width:67%;" class="form-control num-only @error('min_salary') is-invalid @enderror" name="min_salary" id="mini" placeholder="Salary" value="{{ old('min_salary') ?? $job->min_salary }}"  >
                                @error('min_salary')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span class="num-error"></span>
                                <p style="font-size: 0.65rem;">
                                <label>
                                <input type="checkbox" name="hide_salary" id="hidesalaryfield"  value="yes" @if(old('hide_salary') == "yes" || $job->hide_salary == 1) checked @endif/>
                                Hide Salary from Publication
                                </label>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label style="visibility: hidden;">Salary Range (Min) <span style="color: red;">*</span></label>
                            <select type="text"  style="width:67%;" id="amountmini" class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="min_amount"  value="" >
                                <option @if($job->min_amount == "Lakh per Annum") selected @endif>Lakh per Annum</option>
                                <option @if($job->min_amount == "Crore per Annum") selected @endif>Crore per Annum</option>
                            </select>
                        </div>
                        <p style="margin-top:3%; margin-right: 3%; text-align:center;">to</p>
                        <div class="col-md-3 col-sm-12" >
                            <div class="form-group">
                                <label>Salary Range (Max)</label>
                                <input type="text" style="width:67%;" id="max_salary" class="form-control num-only @error('max_salary') is-invalid @enderror" name="max_salary" placeholder="Salary" value="{{ old('max_salary') ?? $job->max_salary }}" @if(old('hide_salary') == "yes" || $job->hide_salary == 1) readonly @endif />
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
                                <select type="text"   class="form-control num-only @error('minimum_experience') is-invalid @enderror" name="max_amount"  style="width:67%;" value="" id="amountmax" @if(old('hide_salary') == "yes" || $job->hide_salary == 1) disabled @endif>
                                <option @if($job->max_amount == "Lakh per Annum") selected @endif>Lakh per Annum</option>
                                <option @if($job->max_amount == "Crore per Annum") selected @endif>Crore per Annum</option>
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
                        <input type="checkbox" id="as-per-industry-standards"  @if($job->min_salary == 'as per industry standards') checked @endif/>
                        </label>
                        <div id="industry-standards-block">
                            <input type="hidden" id="ms-hidden-field" name="min_salary" value="as per industry standards" />
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                        <label>Job Description <span style="color: red;">*</span></label>
                        <textarea class="form-control tinymce " name="description">{{ old('description') ?? $job->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

               
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

                



        </div>
    </div>
@endsection

{{-- /jquery category fetching data drop down  --}}

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
        $(document).ready(function(){

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
                            $("#sub_practice_area").append('<option>No subcategory under this category</option>');
                        }

                    }
                });
            
            });

            // $("#as-per-industry-standards").on("change", function() {
            //     // if($(this).is(":checked")){
            //     //     console.log("checked");
            //     //     $("#industry-standards-block").show();
            //     //     $("#ms-text-field").val("as per industry standards");
            //     //     $("#non-industry-stardards-block").hide();
            //     // } else {
            //     //     console.log("unchecked");
            //     //     $("#non-industry-stardards-block").css('display', 'flex');
            //     //     $("#ms-text-field").val("");
            //     //     $("#industry-standards-block").hide();
            //     // }

            //     if($(this).is(":checked")){
            //         console.log("checked");
            //         $("#industry-standards-block").show();
            //         $("#non-industry-stardards-block").hide();
            //         $("#ms-hidden-field").attr('disabled', false);
            //         $("#ms-text-field").attr('disabled', true);
            //     } else {
            //         console.log("unchecked");
            //         $("#non-industry-stardards-block").css('display', 'flex');
            //         $("#industry-stardards-block").hide();
            //         $("#ms-hidden-field").attr('disabled', true);
            //         $("#ms-text-field").attr('disabled', false);
            //     }
            // });

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


            // $("#hidesalaryfield").on("change", function() {
            //     // if($(this).is(":checked")){
            //     //     console.log("checked");
            //     //     $(this).attr('disabled', false);
            //     //     $("#non-industry-stardards-block").hide();
            //     //     $("#ms-text-field").attr('disabled', true);
            //     // } else {
            //     //     console.log("unchecked");
            //     //     $("#non-industry-stardards-block").css('display', 'flex');
            //     //     $("#as-per-industry-standards").attr('disabled', true);
            //     //     $("#ms-text-field").attr('disabled', false);
            //     // }

            //     if($(this).is(":checked")){
            //         console.log("checked");
            //          $("#ms-text-field").attr('readonly', true);
            //         $("#max_salary").attr('readonly', true);
            //         //  $("#amountmini").attr('readonly', true);
            //           $("#amountmax").attr('disabled', true);
            //           $("#amountmini").attr('disabled',true);
                    
            //         // $("#ms-hidden-field").attr('disabled', false);
            //         // $("#ms-text-field").attr('disabled', true);
            //     } else {
            //         console.log("unchecked");
            //         $("#non-industry-stardards-block").css('display', 'flex');
            //         $("#industry-stardards-block").hide();
            //         $("#ms-text-field").attr('readonly', false);
            //         $("#max_salary").attr('readonly', false);

            //          $("#amountmax").attr('disabled', false);
            //           $("#amountmini").attr('disabled',false);
                    
            //         //  $("#amountmini").attr('readonly', false);
            //         //   $("#amountmax").attr('readonly', false);
            //         // $("#ms-hidden-field").attr('disabled', true);
            //         // $("#ms-text-field").attr('disabled', false);
            //     }
            // });

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