

<?php $__env->startSection('content'); ?>
<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
                <h4 class="border-bottom pb-3"> Search Result </h4>
                <?php if($jobs->count() > 0): ?>
				<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
			 	<div class="row border p-3 mb-2 tab-text-align">
						<div class="col-xs-12 col-md-1">
						<a href="<?php echo e(route('company-profile', $job->company)); ?>">
						<img class="img-fluid" style="border-radius: 50%; height: 65px; width: 65px;"  src="<?php echo e($job->company->profile ? asset('storage/'.$job->company->profile->logo): asset('template/images/logo-placeholder.png')); ?>"></a></div>
						
							<div class="col-xs-12 col-md-3">
								
								<h6> <a href="<?php echo e(route('company-profile', $job->company)); ?>"><?php echo e($job->company->name); ?></a></h6>
								
							</div>
							
							<div class="col-xs-12  col-md-4 offset-md-3" style="text-align: left;" >
							<p ><i class="fa fa-map-marker red-text" aria-hidden="true"></i> <?php echo e($job->location); ?></p>
								
							</div>
							<div class="col-xs-12 col-md-4" style="margin-left:7%;">
							<p><i class="red-text" aria-hidden="true" ></i><?php echo e($job->practiceArea->name); ?></p>
							</div>
							<div class="col-xs-12 col-md-2" >
							<a class="job-des-btn" href="<?php echo e(route('job-show',$job)); ?>">Job Description</a>
							</div>
							<div class="col-xs-12 col-md-2" >
							<p><i class="red-text" aria-hidden="true" ></i><?php echo e($job->minimum_experience); ?> Yrs to 
								<?php echo e($job->maximum_experience); ?> Yrs</p>
							</div>
							<div class="col-xs-12 col-md-3">
								<a href="<?php echo e(route('apply-form', ['job' => $job, 'search-result' => false])); ?>" class="btn-red">Apply Now</a>
							</div>
						</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php else: ?>
                <p>No Jobs</p>
                <?php endif; ?>
			</div>
			<div class="col-md-4 col-lg-4 side-bar">
				

				<?php if(app('request')->input('q')): ?>
					<?php $q = app('request')->input('q') ?>
				<?php else: ?>
					<?php $q = true; ?>
				<?php endif; ?>

				
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('company.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/search/index.blade.php ENDPATH**/ ?>