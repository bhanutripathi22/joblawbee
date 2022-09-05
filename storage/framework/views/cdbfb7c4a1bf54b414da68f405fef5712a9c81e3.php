

<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <a style="color: #e84824" href="<?php echo e(route('company.profile.show', Auth::guard('company')->user())); ?>"><< Go Back</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Job Applications</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Location</th>
                                <th>Experience</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $job->applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($application->first_name); ?></td>
                                <td><?php echo e($application->last_name); ?></td>
                                <td><?php echo e($application->location); ?></td>
                                <td><?php echo e($application->minimum_experience . 'Yrs' . ' - ' . $application->maximum_experience . 'Yrs'); ?></td>
                                <td><a class="btn btn-default" style="background-color: #e84824; color: #fff; border: 1px solid #e84824" target="_blank" href="<?php echo e(asset("storage/{$application->resume}")); ?>">Download Resume</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/jobapply/show_applications.blade.php ENDPATH**/ ?>