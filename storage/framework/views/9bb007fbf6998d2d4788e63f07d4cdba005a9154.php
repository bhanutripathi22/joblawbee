<?php $__env->startSection('content'); ?>
<div class="container my-5">
	<?php echo $__env->make('partials.admin_common_nav', ['active' => 'employer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<h4><p align="center">Employer Tracker</p></h4>
	<div class="row">
		<div class="offset-8 col-4 text-right mb-2">
			<form method="post" action="<?php echo e(route('company.export')); ?>">
				<?php echo csrf_field(); ?>
				<button class="btn btn-success" title="Export Employers"><i class="fa fa-download" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>company Name </th>
				<th>Email</th>
				<th>Contact Person Name</th> 
				<th>Phone No.</th>
				<th>Total Job</th>
				<th>Total Enquiry</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($loop->iteration); ?></td>
				<td><a href="<?php echo e(route('admin.show.company.jobs', $company)); ?>"><?php echo e($company->name); ?></a></td>
				<td><?php echo e($company->email); ?></td>
				<td><?php echo e(isset($company->profile)? $company->profile->contact_name:''); ?></td>
				<td><?php echo e(isset($company->profile)? $company->profile->phone:''); ?></td>
				<td><?php echo e($company->openings->count()); ?></td>
				<td><?php echo e($company->applications->count()); ?></td>
				
				<td><?php echo e($company->status===1 ? 'Active' : 'Deactive'); ?>

					<form method="POST" action="<?php echo e(route('admin.companies.update', $company)); ?>">
						<?php echo csrf_field(); ?>
						<?php echo method_field('PUT'); ?>
						<input type="hidden" name="status" value="<?php echo e($company->status===1 ? 0 : 1); ?>">
						<button type="submit" class="btn btn-primary"><?php echo e($company->status===0 ? 'Active' : 'Deactive'); ?></button>
					</form>		
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
	
	
<?php echo $__env->make('layouts.template-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/home.blade.php ENDPATH**/ ?>