<?php $__env->startSection('styles'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" id="lawyerProfile-tab" data-toggle="tab" href="#lawyerProfile" role="tab" aria-controls="lawyerProfile" aria-selected="false">Firm Profile</a>
      </li>
      
      
      
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
         
         <form id="company-profile" method="POST" action="<?php echo e(route('company.profile.store', $company)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Company Name</label>
                     <input type="text" class="form-control <?php if ($errors->has('company_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('company_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="company_name" placeholder="Company Name" value="<?php echo e(Auth::guard('company')->user()->name ?? old('company_name')); ?>" readonly />
                     <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?>
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
                     <label>Contact Person</label>
                     <input type="text" class="form-control <?php if ($errors->has('contact_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contact_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="contact_name" placeholder="Person Name" value="<?php echo e($company->contact_person_name ?? old('contact_name')); ?>" />
                     <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Designation</label>
                     <input type="text" class="form-control <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="designation" placeholder="Designation" value="<?php echo e($company->profile->designation ?? old('designation')); ?>" />
                     <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
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
                     <label>Email ID</label>
                     <input type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" placeholder="Email" value="<?php echo e(Auth::guard('company')->user()->email ?? old('email')); ?>" />
                     <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
            </div>
            <div class="form-group" style="margin-top:3%;">
               <label>Address1</label>
               <input type="text" class="form-control <?php if ($errors->has('address1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address1'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address1" placeholder="Address 1" value="<?php echo e($company->profile->address1 ?? old('address1')); ?>" />
               <?php if ($errors->has('address1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address1'); ?>
               <span class="invalid-feedback" role="alert">
               <strong><?php echo e($message); ?></strong>
               </span>
               <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label>City</label>
                     <input type="text" class="form-control <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="city" placeholder="City" value="<?php echo e($company->profile->city ?? old('city')); ?>" />
                     <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>State</label>
                     <input type="text" class="form-control <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="state" placeholder="State" value="<?php echo e($company->profile->state ?? old('state')); ?>" />
                     <?php if ($errors->has('state')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('state'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Pincode</label>
                     <input type="text" class="form-control <?php if ($errors->has('pincode')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pincode'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="pincode" placeholder="Pincode" value="<?php echo e($company->profile->pincode ?? old('pincode')); ?>" />
                     <?php if ($errors->has('pincode')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pincode'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Mobile No.</label>
                     <input type="text" class="form-control <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phone" placeholder="Phone" value="<?php echo e($company->phone ?? old('phone')); ?>" />
                     <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Website</label>
                     <input type="url" class="form-control <?php if ($errors->has('website')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('website'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="website" placeholder="Website" value="<?php echo e($company->profile->website ?? old('website')); ?>" />
                     <?php if ($errors->has('website')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('website'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Logo</label>
                     <input type="file" class="form-control <?php if ($errors->has('logo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('logo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="logo" placeholder="Logo" style="height: auto" >
                     
                     <?php if ($errors->has('logo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('logo'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <textarea class="form-control tinymce" name="profile_text" rows="15"><?php echo e($company->profile->profile_text ?? old('profile_text')); ?></textarea>
                  </div>
               </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
         
         <div class="row" style="margin-top:3%;">
            <div class="card-body">
               <form method="POST" action="<?php echo e(route('company.changepassword',$company)); ?>">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <div class="form-group row">
                     <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                     <div class="col-md-6">
                        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                           name="password" required autocomplete="current-password">
                        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                        <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                     <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                     </div>
                  </div>
                  <div class="form-group row mb-0">
                     <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                        <?php echo e(__('Change')); ?>

                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      
      
      <div class="tab-pane fade" id="pressRelease" role="tabpanel" aria-labelledby="pressRelease-tab">
         <br/>
         
         <form id="press-release" method="POST" action="<?php echo e(route('company.press.release.store', $company)); ?>">
            <?php echo csrf_field(); ?>
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
                        <?php $__currentLoopData = $company->pressReleases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $press): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($loop->iteration); ?></td>
                           <td><?php echo e($press->tittle); ?></td>
                           <td><?php echo $press->press_text; ?></td>
                           <td>
                              <a href="<?php echo e(route('company.PressRelease.edit_show', ['pressrelease'=>$press])); ?>" class="btn btn-info fa fa-edit"></a>
                           </td>
                           <form method="POST" action="<?php echo e(route('company.PressRelease.delete', ['pressrelease'=>$press])); ?>">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('delete'); ?>
                              <td><button type="submit"  class="btn btn-info fa fa-trash-o"></button> </td>

            </form>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
          </div>
       </div>
         </div>
      </div>
      <div class="tab-pane fade" id="jobOpening" role="tabpanel" aria-labelledby="jobOpening-tab">
         <br />
         
         <form id="job-opening" method="POST" action="<?php echo e(route('company.job.opening.store', $company)); ?>">
            <?php echo csrf_field(); ?>
            <div class="row" style="margin-top:3%;">
               
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Practice Area<span style="color: red;">*</span></label>
                     <select class="form-control" name="practice_area" id="practice_area" required>
                     <?php $__currentLoopData = $practice_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option <?php if(old('practice_area') == $area->id): ?> selected="selected" <?php endif; ?> value="<?php echo e($area->id); ?>"><?php echo e($area->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div>
               </div>
               <div class="col-md-2"></div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Designation <span style="color: red;">*</span></label>
                     <input type="text" class="form-control alpha-only <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="designation" placeholder="" value="<?php echo e(old('designation')); ?>" required>
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
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Location <span style="color: red;">*</span></label>
                     <select class="form-control <?php if ($errors->has('location')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('location'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  id="multiple_location" name="location[]" multiple="multiple" required>
                     <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option <?php if(old('location') == $locate->name): ?> selected <?php endif; ?> value="<?php echo e($locate->name); ?>"><?php echo e($locate->name); ?></option>
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
               <div class="col-md-2"></div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Years of Experience <span style="color: red;">*</span></label>
                     <div class="row">
                        <div class="col-md-4 col-xl-3 pr-xl-0">
                           <select  class="form-control  <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="minimum_experience"   required>
                              <option disabled selected>Min</option>
                              <?php for($i=1; $i<=40; $i++): ?>
                              <option><?php echo e($i); ?></option>
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
                        <div class="col-md-4 col-xl-3 pl-xl-0">
                           <select  class="form-control <?php if ($errors->has('minimum_experience')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('minimum_experience'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="maximum_experience"   required>
                              <option disabled selected>Max</option>
                              <?php for($i=1; $i<=40; $i++): ?>
                              <option><?php echo e($i); ?></option>
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
               <div class="col-md-5">
                  <div class="form-group">
                     <label>Key Skills <span style="color: red;">*</span></label>
                     <select class="form-control <?php if ($errors->has('key_skills')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('key_skills'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  id="multipleselect"  name="key_skills[]" multiple="multiple" required>
                        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option style="font-size:1rem;"><?php echo e($skill->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                     <?php if ($errors->has('key_skills')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('key_skills'); ?>
                     <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                     </span>
                     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
               </div>
               <div class="col-md-2"></div>
               <div class="col-md-5">
                  <label>No. of Vacancies <span style="color: red;">*</span></label>
                  <input type="text" name="no_of_vacancies" class="form-control num-only <?php if ($errors->has('no_of_vacancies')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_of_vacancies'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required>
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
                        <input id="ms-text-field" type="text" style="width:67%;" class="form-control num-only <?php if ($errors->has('min_salary')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('min_salary'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="min_salary" id="mini" placeholder="Salary" value="<?php echo e(old('min_salary')); ?>"  >
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
                           <input type="checkbox" name="hide_salary" id="hidesalaryfield"  value="yes" <?php if(old('hide_salary') == "yes"): ?> checked <?php endif; ?>/>
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
                        <option>Lakh per Annum</option>
                        <option>Crore per Annum</option>
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
endif; ?>" name="max_salary" placeholder="Salary" value="<?php echo e(old('max_salary')); ?>" <?php if(old('hide_salary') == "yes"): ?> readonly <?php endif; ?> />
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
endif; ?>" name="max_amount"  style="width:67%;" value="" id="amountmax" <?php if(old('hide_salary') == "yes"): ?> disabled <?php endif; ?>>
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
               <textarea class="form-control tinymce <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="description" ></textarea>
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
      <div class="tab-pane fade" id="jobPosted" role="tabpanel" aria-labelledby="jobPosted-tab">
         <br/>
         
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
                        <?php $__currentLoopData = $company->openings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opening): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td style="width:5%;"><?php echo e($loop->iteration); ?></td>
                           <td style="width:35%;"><a href="<?php echo e(route('show-applications', $opening)); ?>"><?php echo e($opening->PracticeArea->name); ?></a></td>
                           
                           <td style="width:25%;"><?php echo e($opening->location); ?></td>
                           <td style="width:5%;"><?php echo e($opening->status===1 ? 'Active' : 'Deactive'); ?></td>
                           <td style="width:15%;">
                              <a href="<?php echo e(route('job-edit', $opening)); ?>" class="btn btn-primary btn-sm fa fa-edit"></a>
                              <form style="display: inline-block" method="POST" action="<?php echo e(route('job-update-status', $opening)); ?>">
                                 <?php echo csrf_field(); ?>
                                 <?php echo method_field('PUT'); ?>
                                 <input type="hidden" name="status" value="<?php echo e($opening->status===1 ? 0 : 1); ?>">
                                 <button type="submit" class="btn btn-primary btn-sm"><?php echo e($opening->status===0 ? 'Active' : 'Deactive'); ?></button>
                              </form>
                           </td>
                           <td style="width:15%;">
                             <div id="social-links">
                                <?php $url = route('job-show', $opening); $text = "Check out the job posted under " . $opening->PracticeArea->name . " practice area"; ?>
                                 <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($url); ?>" class="social-button " id=""><span class="fa fa-facebook-official"></span></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?text=<?php echo e($text); ?>&amp;url=<?php echo e($url); ?>" class="social-button " id=""><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e($url); ?>&amp;title=<?php echo e($text); ?>&amp;summary=<?php echo e($text); ?>" class="social-button " id=""><span class="fa fa-linkedin"></span></a></li>    
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div></div></div>
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
                  window.location.href="<?php echo e(route('company.job.posted.show', $company)); ?>"
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('company.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\joblawbee\resources\views/company/profile/show.blade.php ENDPATH**/ ?>