<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row">
		<div class="col-md-12 col-lg-12">
            
            <h4 class="text-center">Jobs under <?php echo e($practiceArea->name); ?></h4>

            <div class="card-body mt-4">
                <!-- Tab panes -->
                <div class="tab-content text-center">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <?php if($practiceArea->openings->count() > 0): ?>
                        <?php $__currentLoopData = $practiceArea->openings()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row border p-3 mb-2 tab-text-align">
                            <div class="col-xs-12 col-md-1"><img class="img-fluid" src="<?php echo e(($job->company->profile && $job->company->profile->logo) ? asset('storage/'.$job->company->profile->logo) : 'https://ui-avatars.com/api/?background=e84824&color=ffffff&name='.$job->company->name); ?>"></div>
                        
                            <div class="col-xs-12 col-md-5 text-left">
                                <p><i class="fa fa-map-marker red-text" aria-hidden="true"></i> <?php echo e($job->location); ?></p>
                            </div>
                            <div class="col-xs-12 col-md-3">
                          <a class="job-des-btn" href="<?php echo e(route('job-show', $job)); ?>">Job Description</a></div>
                          <div class="col-xs-12 col-md-3"><a href="<?php echo e(route('apply-form', $job)); ?>" class="btn-red">Apply Now</a> 
                        
                        </div>
                            </div>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <h2>No Jobs Found</h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('company.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\joblawbee\resources\views/practice_area/show.blade.php ENDPATH**/ ?>