<?php $__env->startSection('styles'); ?>
    <style>
        #common-nav .nav-item > .nav-link.active{
            background:#e84824;
            color: #fff;
            border-radius: 20px;
            padding: 10px 20px;
        }

        #common-nav .nav-item > .nav-link{
            background: #ccc;
            color: #000;
            border-radius: 20px;
            padding: 10px 20px;
        }
    </style>
<?php $__env->stopSection(); ?>

<ul id="common-nav" class="nav justify-content-center mb-5">
    <li class="nav-item">
        <a class="nav-link <?php if($active == 'employer'): ?> active <?php endif; ?>" href="<?php echo e(route('home')); ?>">Employer Tracker</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($active == 'application'): ?> active <?php endif; ?>" href="<?php echo e(route('application.tracker')); ?>">Application Tracker</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($active == 'subscription'): ?> active <?php endif; ?>" href="<?php echo e(route('subscription.tracker')); ?>">Subscription Tracker</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($active == 'job_posting'): ?> active <?php endif; ?>" href="<?php echo e(route('job.posting.tracker')); ?>">Job posting Tracker</a>
    </li>
</ul><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/partials/admin_common_nav.blade.php ENDPATH**/ ?>