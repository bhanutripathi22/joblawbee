

<?php $__env->startSection('content'); ?>

<div class="container pb-5">
		<div class="row" data-aos="fade-up">
			<?php $__currentLoopData = $practice_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $practice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  text-center" style="margin-top:12%;">
				<div class="bg-area border">
					<div class="step-img"><img src="<?php echo e(asset('template/images/icon_4.png')); ?>"></div>
					<h5><?php echo e($practice->name); ?></h5>
					<a class="btn-red overlap-btn" href="<?php echo e(route('practicearea.show', $practice)); ?>">View Detail</a>
				</div>
			</div>
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
			
		</div>
	</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.template-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/practice_area/show_all.blade.php ENDPATH**/ ?>