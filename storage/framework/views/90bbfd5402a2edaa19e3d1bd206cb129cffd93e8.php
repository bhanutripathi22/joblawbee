<?php $__env->startSection('content'); ?>
<section style="padding: 7rem 0 3rem;">
<form method="POST" action="<?php echo e(route('apply', $job)); ?>" enctype="multipart/form-data" id="jobapply_form">
<div class="container">
		<div class="row">
            
			<div class="col-md-10 col-lg-10 offset-1">
                <h3 class="mb-3" style="font-size:1.2rem;"> "<?php echo e($job->practiceArea->name); ?> | <?php echo e($job->minimum_experience); ?> Years to <?php echo e($job->maximum_experience); ?> Years | <?php echo e($job->location); ?>"</h3>

                
				<div class="row profile-div" style="margin-top: 3%;">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<div class="row mb-6">
						<div class="float-left text-left w-50">
							
						<p class=""><span style="font-size:16px;">Practice Area: </span><?php echo e($job->practiceArea->name); ?></p>
								</div>
							<div class="" >
							
						    <p><span style="font-size:16px;">Firm Name:</span><a href="<?php echo e(route('company-profile', $job->company)); ?> " class="job-des-btn">	<?php echo e($job->company->name); ?></a></p>
								</div>	</div>

						<div class="row mb-3">
						<div class="float-left text-left w-50">
							
							<span class="d-table-cell"><span style="font-size:16px;">Total Experience:</span> <?php echo e($job->minimum_experience); ?> Yrs to <?php echo e($job->maximum_experience); ?> Yrs</span>     
							</div>
							<div class="" >
								
							<p><span style="font-size:12px;">Posted on </span> <?php echo e(\Carbon\Carbon::parse($job->created_at)->format('d-m-Y')); ?></p></div>
						
                        </div>
                               
                        
						<div class="row mb-3">
                            
                                <span style="font-size:16px;">“Applied for Location:</span><br><br> 
                                
							<div class="col-lg-4 col-md-4 col-sm-12">
                                
                                <?php
                                  $location_multiple =explode(',', $job->location);
                                ?>
                                 <select class="form-control"  id="multiple_location" name="job_location" >
                                
                           <?php $__currentLoopData = $location_multiple; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                              
                                <option <?php if(old('location') ==  $state): ?> selected <?php endif; ?> value="<?php echo e($state); ?>">
                                    <?php echo e($state); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
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
                
				<div class="row">
                    <div class="col-md-4 ml-auto text-right">
                        <a class="btn btn-link" href="<?php echo e(route('welcome')); ?>" style="color: #e84824;"><i class="fa fa-arrow-left" aria-hidden="true"></i> GO BACK TO HOME</a>
                    </div>
                </div>
				<div class="light-bg p-4">
                 
                        <?php echo csrf_field(); ?>
                        <div class="w-50 float-left mb-3">
                            <div class="mr-md-2">
                                <label>First Name <span style="color: red;">*</span></label>
                                <input type="text" id="first_name" class="form-control search-form1" placeholder="First Name" name="first_name" value="<?php echo e(old ('first_name')); ?>" required onkeyup="firstname()">
                                <span id="fname" style="color: red; display:block;"></span>
                            </div>
                        </div>
                        <div class="w-50 float-left mb-3"> <span style="color: red;">*</span><label>Last Name</label>
                            <input type="text" id="last_name" class="form-control search-form1" placeholder="Last Name" name="last_name" name="<?php echo e(old('last_name')); ?>" required onkeyup="lastname()">
                            <span id="lname" style="color: red; display:block;"></span>
                        </div>
                          
                        

                         <div class="w-50 float-left mb-3 pr-md-2" style="clear:both; box-sizing: border-box;">
                        
                            <label >Mobile <span style="color: red;">*</span> </label>
                            <div class="row">
                                <div class="col-md-4 col-sm-2 pr-0 mobile-code" >
                                      <div class="mr-md-3">
                                    <input type="text" class="form-control search-form1" name="" placeholder="91+" value=""  >
                                </div>
                              </div>
                                <div class="col-md-8 pl-lg-0 col-sm-4 pl-md-0 moblle-text">
                                  <input type="text" id="mobile_no" name="mobile" class="form-control search-form1" placeholder="mobile" name="<?php echo e(old('mobile')); ?>" required onkeyup="mobilevalidate()">
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
                            <?php $__currentLoopData = $practice_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if(old('practice_area') == $area->id): ?> selected="selected" <?php endif; ?> value="<?php echo e($area->id); ?>" class="<?php echo e($area->type === 'parent' ? 'optionGroup' : 'optionChild'); ?>"><?php echo e($area->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                          <div class="w-50 mb-3">
                            <label>Current Location <span style="color: red;">*</span></label>
                            <select class="form-control search-form1"  name="location" required>
                                  <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option><?php echo e($city->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        

                        <div class="w-50 float-left mb-3 pr-md-2" style="clear:both; box-sizing: border-box;">
                        
                            <label>Total Experience <span style="color: red;">*</span></label>
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <select  class="form-control search-form1" name="minimum_experience" value="<?php echo e(old('minimum_experience')); ?>" >
                                          <option disabled default selected> Years</option>
                                          <?php for($i=1;$i<=40;$i++): ?>
                                    <option><?php echo e($i); ?></option>
                                          <?php endfor; ?>
                                      
                                </select>
                                </div>

                                <div class="col-md-2 p-0">
                                    <p class="text-center mb-0" style="line-height: 3;">to</p> 
                                </div>
                                <div class="col-md-4 pl-lg-0 pl-md-0">
                                    <select class="form-control search-form1" name="maximum_experience" value="<?php echo e(old('minimum_experience')); ?>" >
                                 <option disabled default selected>Month</option>
                                 <?php for($i=1;$i<=12;$i++): ?>
                                    <option><?php echo e($i); ?></option>
                                 <?php endfor; ?>
                                        
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
                            <input type="text" class="form-control search-form1" name="current_salary_thousand" id="current" placeholder="In Thousand" value="<?php echo e(old('minimum_experience')); ?>" />
                                </div>
                                
                            </div>
                        </div>
                      

                        
                        <div class="w-100 float-left mb-3">
                            <label>Additional Details</label>
                            <textarea type="text" class="form-control search-form1" placeholder="Additional Details" name="comment"></textarea>
                        </div>

                        <div class="custom-file mb-3">
                              <label>Upload Resume</label>
                            
                            <input type="file" class="form-control" name="resume" style="height: auto; border-radius: 0; padding: 13px;" required />
                        </div>
                        <button class="btn-red1" type="submit">Submit</button>
                    
				</div>
			</div>
		</div>
    </div>
    


 </form>   
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

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

















<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/jobapply/apply_form.blade.php ENDPATH**/ ?>