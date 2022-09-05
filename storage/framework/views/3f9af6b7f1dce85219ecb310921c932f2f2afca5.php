<?php $__env->startSection('fb-meta'); ?>
<meta property="og:title" content="<?php echo e($job->practiceArea->name); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo e(route('job-show', $job)); ?>" />
<meta property="og:image" content="<?php echo e(asset('template/images/logo-job1200X627.jpg')); ?>" />
<meta property="og:description" content="Apply for job" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('twitter-meta'); ?>
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo e($job->practiceArea->name); ?>">
<meta name="twitter:description" content="Apply for job">
<meta name="twitter:image" content="<?php echo e(asset('template/images/logo-job120X120.jpg')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
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
<section>
	<div class="container">
		<div class="row"> 
			<div class="col-xs-12 col-md-12 col-lg-12" >

				<div class="row profile-div" id="des"   >
					<div class="col-xs-12 col-md-12 col-lg-12">

						<div class="row mb-3">

							<div class="col-lg-2 col-md-3 col-sm-3 ">
						<span style="font-size: 16px;">Practice Area: </span>
							</div>
								<div class="col-lg-4 col-md-4 col-sm-9 ">
								<p class=""><?php echo e($job->practiceArea->name); ?></p>
								</div>

									<div class="col-lg-2 col-md-3 col-sm-3">
										<span  style="font-size: 16px;">Firm Name:</span>
									</div>
								<div class="col-lg-2 col-md-3 col-sm-9">
								<p><a href="<?php echo e(route('company-profile', $job->company)); ?> " class="job-des-btn"><?php echo e($job->company->name); ?></a></p>
								</div>	
						</div>



						<div class="row mb-3">
									<div class="col-lg-2 col-md-3 col-sm-3 ">
										<span style="font-size: 16px;">Total Experience:</span>
									</div>
								<div class="col-lg-4 col-md-4 col-sm-9 ">
								<span class="d-table-cell">	<?php echo e($job->minimum_experience); ?> Yrs to <?php echo e($job->maximum_experience); ?> Yrs</span>     
								</div>
									<div class="col-lg-2 col-md-3 col-sm-3 ">
								<p><span style="font-size: 16px;">Posted on </span>
								</div>
									<div class="col-lg-2 col-md-3 col-sm-9 "> 
								<?php echo e(\Carbon\Carbon::parse($job->created_at)->format('d-m-Y')); ?></p>
								</div>
						</div>



					<div class="row mb-3">
						<div class="col-lg-2 col-md-4 col-sm-3 ">
						<span style="font-size: 16px;">Location:</span>
						</div>
							<div class="col-lg-4 col-md-4 col-sm-9">
								<i class="fa fa-map-marker red-text d-table-cell pr-2" aria-hidden="true"></i>
								 <span class="d-table-cell"><?php echo e($job->location); ?></span>     
							</div>
								
							<div  class="col-lg-2 col-md-3 col-sm-12 ">
							<a href="<?php echo e(route('apply-form', ['job' => $job, 'search-result' => false])); ?>" class="btn-red">Apply Now</a>
							</div>
					</div>
						
					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="card-body col-md-12 col-lg-12 pt-0">
				
				
				<?php if($job->key_skills != null): ?>
					<h4 class="my-3">KEY SKILLS</h4>
					<?php $skills = explode(',', $job->key_skills); $skill_count = count($skills); ?>
					<?php for($i = 0; $i < $skill_count; $i++ ): ?>
					<button class="key-skill-btn"><?php echo e($skills[$i]); ?></button>
					<?php endfor; ?>
				<?php endif; ?>

				 <h4>Job Description</h4>
					<?php echo $job->description; ?>


				
				
				
			</div>
			
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/job/show.blade.php ENDPATH**/ ?>