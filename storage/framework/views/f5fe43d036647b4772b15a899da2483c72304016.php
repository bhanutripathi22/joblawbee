<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10 mt-5 mb-5">
                <form method="POST" action="<?php echo e(route('job-update', $job)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label>Practice Area <span style="color: red;">*</span></label>
                                <select class="form-control" name="practice_area" id="practice_area" required>
                                    <?php $__currentLoopData = $practice_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($job->practice_area == $area->id): ?> selected="selected" <?php endif; ?> value="<?php echo e($area->id); ?>"><?php echo e($area->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation <span style="color: red;">*</span></label>
                                <input type="text" class="form-control alpha-only <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="designation" placeholder="" value="<?php echo e(old('designation') ?? $job->designation); ?>" required />
                                <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                <span class="alpha-error"></span>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                             <div class="col-md-6">
                        <div class="form-group">
                            <label>Location <span style="color: red;">*</span></label>
                            <select class="form-control <?php if ($errors->has('location')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('location'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  id="multiple_location" name="location[]" multiple="multiple">

                                <?php
                                $locate =  explode(",", $job->location) 
                                ?>
                                <option disabled>Location</option>
                                <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if(in_array($locations->name,$locate)): ?> selected <?php endif; ?> value="<?php echo e($locations->name); ?>"><?php echo e($locations->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php if ($errors->has('location')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('location'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                    


                  <div class="col-md-6">
                        <div class="form-group">
                            <label>Years of Experience <span style="color: red;">*</span></label>
                            <div class="row" style="margin-left:1px;">
                             <div class="col-md-4 col-xl-2 pr-xl-0" style="padding-left:inherit; padding-right:0px;">
                            <select type="text" class="form-control num-only <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="minimum_experience"  value="<?php echo e(old('minimum_experience')); ?>" />
                             
                            <option>Min</option>
                             <?php for($i=1; $i<=40; $i++): ?>
                            <option <?php if($job->minimum_experience==$i): ?> selected <?php endif; ?> value=<?php echo e($i); ?>><?php echo e($i); ?></option>
                                <?php endfor; ?>
                        </select>
                            <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            <span class="num-error"></span>
                             </div>
                               <div class="col-md-1 p-0">
                              <p class="text-center mb-0" style="line-height: 3;">to</p> 
                                </div>
                              <div class="col-md-4 col-xl-2 pr-xl-0" style="padding-right: inherit; padding-left:0px;">

                            <select  class="form-control num-only <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="maximum_experience"  value="<?php echo e(old('minimum_experience')); ?>" />
                              
                            <option>Max</option>
                             <?php for($i=1; $i<=40; $i++): ?>
                            <option  <?php if($job->maximum_experience==$i): ?> selected <?php endif; ?> value=<?php echo e($i); ?>><?php echo e($i); ?></option>
                                <?php endfor; ?>
                        </select>
                            <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                            <select class="form-control <?php if ($errors->has('key_skills')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('key_skills'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  id="multipleselect"  name="key_skills[]" multiple="multiple">
                                <?php
                               $keyskills = explode(",", $job->key_skills);
                                    ?>
                                    
                                ?>
                              
                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              
                                     <option <?php if(in_array($skill->name, $keyskills )): ?> selected <?php endif; ?> value="<?php echo e($skill->name); ?>"><?php echo e($skill->name); ?></option>
                              
                        
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                          <!-- <?php if ($errors->has('key_skills')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('key_skills'); ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($message); ?></strong>
                              </span>
                          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> -->
                      </div>
                  </div>

                

                      <div class="col-md-6">
                    <label>No. of Vacancies <span style="color: red;">*</span></label>
                    <input type="text" name="no_of_vacancies" class="form-control num-only <?php if ($errors->has('no_of_vacancies')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_of_vacancies'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e($job->no_of_vacancies); ?>" />
                    <?php if ($errors->has('no_of_vacancies')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_of_vacancies'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <span class="num-error"></span>
                </div> 
            </div> 
                    <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Type <span style="color: red;">*</span></label>
                            <select type="text" class="form-control" name="type"  value="" >
                                    <option <?php if($job->type=='full_time'): ?> selected='selected' <?php endif; ?>  value="full_time">Full Time</option>
                                    <option  <?php if($job->type=='part_time'): ?> selected='selected' <?php endif; ?> value="part_time">Part Time</option>
                                    <option <?php if($job->type=='work_from_home'): ?> selected='selected' <?php endif; ?> value="work_from_home">Work From Home</option>
                                      
                                 </select>
                            </div>
                  </div></div>
                    
                    
                    <div class="row">
                        <div class="non-industry-stardards-block" style="width: 100%; <?php if($job->min_salary == 'as per industry standards'): ?> display: none; <?php else: ?> display: flex; <?php endif; ?>">
                            <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Salary Range (Min) <span style="color: red;">*</span></label>
                                <input id="ms-text-field" type="text" style="width:67%;" class="form-control num-only <?php if ($errors->has('min_salary')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('min_salary'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="min_salary" id="mini" placeholder="Salary" value="<?php echo e(old('min_salary') ?? $job->min_salary); ?>"  >
                                <?php if ($errors->has('min_salary')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('min_salary'); ?>
                                <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                <span class="num-error"></span>
                                <p style="font-size: 0.65rem;">
                                <label>
                                <input type="checkbox" name="hide_salary" id="hidesalaryfield"  value="yes" <?php if(old('hide_salary') == "yes" || $job->hide_salary == 1): ?> checked <?php endif; ?>/>
                                Hide Salary from Publication
                                </label>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label style="visibility: hidden;">Salary Range (Min) <span style="color: red;">*</span></label>
                            <select type="text"  style="width:67%;" id="amountmini" class="form-control num-only <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="min_amount"  value="" >
                                <option <?php if($job->min_amount == "Lakh per Annum"): ?> selected <?php endif; ?>>Lakh per Annum</option>
                                <option <?php if($job->min_amount == "Crore per Annum"): ?> selected <?php endif; ?>>Crore per Annum</option>
                            </select>
                        </div>
                        <p style="margin-top:3%; margin-right: 3%; text-align:center;">to</p>
                        <div class="col-md-3 col-sm-12" >
                            <div class="form-group">
                                <label>Salary Range (Max)</label>
                                <input type="text" style="width:67%;" id="max_salary" class="form-control num-only <?php if ($errors->has('max_salary')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('max_salary'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="max_salary" placeholder="Salary" value="<?php echo e(old('max_salary') ?? $job->max_salary); ?>" <?php if(old('hide_salary') == "yes" || $job->hide_salary == 1): ?> readonly <?php endif; ?> />
                                <?php if ($errors->has('max_salary')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('max_salary'); ?>
                                <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                <span class="num-error"></span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12" style="margin-top: 1.5%;">
                            <div class="form-group" style="margin-top: 10px;">
                                <select type="text"   class="form-control num-only <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="max_amount"  style="width:67%;" value="" id="amountmax" <?php if(old('hide_salary') == "yes" || $job->hide_salary == 1): ?> disabled <?php endif; ?>>
                                <option <?php if($job->max_amount == "Lakh per Annum"): ?> selected <?php endif; ?>>Lakh per Annum</option>
                                <option <?php if($job->max_amount == "Crore per Annum"): ?> selected <?php endif; ?>>Crore per Annum</option>
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
                        <input type="checkbox" id="as-per-industry-standards"  <?php if($job->min_salary == 'as per industry standards'): ?> checked <?php endif; ?>/>
                        </label>
                        <div id="industry-standards-block">
                            <input type="hidden" id="ms-hidden-field" name="min_salary" value="as per industry standards" />
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                        <label>Job Description <span style="color: red;">*</span></label>
                        <textarea class="form-control tinymce " name="description"><?php echo e(old('description') ?? $job->description); ?></textarea>
                        <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

               
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

                



        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('scripts'); ?>

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
                // var _token = '<?php echo e(csrf_token()); ?>';
                var url = '<?php echo e(route("api.sub-practice-areas", ":practice_area")); ?>';

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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('company.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/job/edit.blade.php ENDPATH**/ ?>