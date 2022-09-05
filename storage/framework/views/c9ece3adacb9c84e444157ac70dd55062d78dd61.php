<?php $__env->startSection('styles'); ?>    
<style>
.optionGroup {
    font-weight: bold;
    font-style: italic;
}
    
.optionChild {
    padding-left: 15px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <h2>Jobs Posted</h2>
    <div class="table-responsive">
    <table class="table table-striped " >
        <thead>
            <tr>
                <th>#</th>
                <th>Practice Area</th>
                <th>Location</th>
                <th>Status</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            <?php if($company->openings->count() > 0): ?>
            <?php $__currentLoopData = $company->openings()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opening): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><a href="<?php echo e(route('show-applications', $opening)); ?>"><?php echo e($opening->PracticeArea->name); ?></a></td>
               
                <td><?php echo e($opening->location); ?></td>
                <td><?php echo e($opening->status===1 ? 'Active' : 'Deactive'); ?></td>
                <td><a href="<?php echo e(route('job-edit', $opening)); ?>" class="btn btn-primary btn-sm fa fa-edit"></a></td>
                <td>
                    <form style="display: inline-block" method="POST" action="<?php echo e(route('job-update-status', $opening)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="status" value="<?php echo e($opening->status===1 ? 0 : 1); ?>">
                        <button type="submit" class="btn btn-primary btn-sm"><?php echo e($opening->status===0 ? 'Active' : 'Deactive'); ?></button>
                    </form>
                </td>
                <td>
                    <a target="_blank" href="<?php echo e(route('job-show', $opening)); ?>" class="btn btn-primary btn-sm">Preview</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No Jobs Found. <a style="text-decoration: underline;" href="<?php echo e(route('company.profile.show', auth()->guard('company')->user())); ?>">Add Job Here</a></td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('company.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/company/jobopening/show_jobs_posted.blade.php ENDPATH**/ ?>