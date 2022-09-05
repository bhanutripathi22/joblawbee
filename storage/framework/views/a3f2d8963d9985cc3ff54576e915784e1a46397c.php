

<?php $__env->startSection('content'); ?>
 <section>
 <div class="container">
  <div class="row">
   <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top:20%;">
    <div class="row profile-div">
   <div class="col-xs-12 col-md-8 col-lg-8" >
    <h4> <?php echo e($company->name); ?></h4>

     <p><i class="fa fa-map-marker red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->address1 . ' ' . $company->profile->address2 . ', ' . $company->profile->city . ', ' . $company->profile->state . ',' . $company->profile->pincode : 'Not Available'); ?></span></p>

    
         <p><i class="fa fa-address-book red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->contact_name . ',' . $company->profile->designation : 'Not Available'); ?></span></p>
         
     <p><i class="fa fa-envelope red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->email : 'Not Available'); ?></span></p> 

      <p><i class="fa fa-phone red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->phone : 'Not Available'); ?></span></p>

     <p><i class="fa fa-globe red-text d-table-cell pr-2" aria-hidden="true"></i> <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->website : 'Not Available'); ?></span></p>
   </div>
   
   <div class="col-xs-12 col-md-4 col-lg-4">
      <img class="img-fluid" src="<?php echo e(($company->profile && $company->profile->logo) ? asset('storage/'.$company->profile->logo) : 'https://ui-avatars.com/api/?background=e84824&color=ffffff&name='.$company->name); ?>"/>
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
              <?php echo isset($company->profile) ? $company->profile->profile_text : ''; ?>

            </div>
            
            <div class="tab-pane" id="press" role="tabpanel">
              <h3  class="mt-0 pb-1">Press Releases</h3>
              
              <?php $__currentLoopData = $company->pressReleases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $press): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="row">
              <div class="col-md-6">
              <p> <i class="fa fa-circle" aria-hidden="true" style="color: #e84824;">&nbsp;&nbsp;<a href="<?php echo e(route('pressrelease',  $press)); ?> " class="job-des-btn ">  <?php echo e($press->tittle); ?> </i></a></p>
              </div>
              
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>



            <div class="tab-pane" id="job" role="tabpanel">
              <h3  class="mt-0 pb-1">Job Opening</h3>
              <?php if($company->openings->count() > 0): ?>
              <?php $__currentLoopData = $company->openings()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row border p-3 mb-2 tab-text-align">
                  <div class="col-xs-12 col-md-1">
                    <img class="img-fluid" src="<?php echo e($company->profile ? asset('storage/'.$company->profile->logo) : asset('template/images/logo-placeholder.png')); ?>"></div>
                
                  <div class="col-xs-12 col-md-5">
                      <p><i class="fa fa-map-marker red-text" aria-hidden="true"></i> <?php echo e($job->location); ?></p>
                  </div>
                  <div class="col-xs-12 col-md-3">
                      <a class="job-des-btn" href="<?php echo e(route('job-show', $job)); ?>">Job Description</a>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <a href="<?php echo e(route('apply-form', $job)); ?>" class="btn-red">Apply Now</a>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
                  <h2>No Jobs Found</h2>
              <?php endif; ?>
            </div>
            <div class="tab-pane" id="contact" role="tabpanel">
              <h3  class="mt-0 pb-1">Contact Us</h3>
                <p><i class="fa fa-map-marker red-text d-table-cell pr-2" aria-hidden="true"></i> 
                  <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->address1 . ' ' . $company->profile->address2 . ', ' . $company->profile->city . ', ' . $company->profile->state : ''); ?></span></p>
                <p><i class="fa fa-phone red-text d-table-cell pr-2" aria-hidden="true"></i> 
                  <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->phone : ''); ?></span></p>
                <p><i class="fa fa-envelope red-text d-table-cell pr-2" aria-hidden="true"></i>
                  <span class="d-table-cell"><?php echo e($company->email); ?></span></p>
                <p><i class="fa fa-globe red-text d-table-cell pr-2" aria-hidden="true"></i>
                  <span class="d-table-cell"><?php echo e(isset($company->profile) ? $company->profile->website : ''); ?></span></p>
            </div>
          </div>
      <!-- End Tabs on plain Card -->
    </div>
    </div>
  </div>
 </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/company_profile.blade.php ENDPATH**/ ?>