<!DOCTYPE html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta property="og:title" content="Jobs Lawbee">
		<meta property="og:image" content="<?php echo e(asset('template/images/logo-job120X120.jpg')); ?>">
		<meta property="og:description" content="Jobs Lawbee is the first legal job search provider in India. It is an excellent solution for independent lawyers, law firms, companies and organisations, to reach out to the global pool of graduates and highly skilled legal professionals. Jobs Lawbee helps legal professionals to take a big step in their career enhancement.">
		<title>Jobs Lawbee</title>

		<?php echo $__env->yieldContent('fb-meta'); ?>
		<?php echo $__env->yieldContent('twitter-meta'); ?>

		<!-- CSS -->
		<link href="<?php echo e(asset('template/css/bootstrap.min.css')); ?>" rel="stylesheet">
		<link  href="<?php echo e(asset('template/css/bootstrap.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('template/style.css')); ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo e(asset('template/css/aos.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('template/css/animate.css')); ?>">
		<link rel="icon" href="<?php echo e(asset('template/images/fav-icon.png')); ?>" type="image/x-icon" />
		<link rel="stylesheet" href="<?php echo e(asset('template/css/responsive.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('css/custom_modal.css')); ?>" />
		<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

		<?php echo $__env->yieldContent('styles'); ?>
	</head>



	<body>
		
			<section class="banner-bg">
			<!-- Navigation -->
			<header>
				<nav class="navbar navbar-expand-lg navbar-dark black-bg static-top" id="myHeader" style="position: fixed;
    			width: 100%; z-index: 1;">
					<div class="container">
						<a class="navbar-brand" href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('template/images/logo-job.png')); ?>"/></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarResponsive" >
							<ul class="navbar-nav ml-auto" >

								<li class="nav-item active">
									<a class="nav-link" href="<?php echo e(url('/')); ?>">Home
									<span class="sr-only">(current)</span>
									</a>
								</li>

								
								<?php if(Auth::guard('company')->guest()): ?>

										<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											Employer Login<span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											
												<a class="dropdown-item" href="<?php echo e(route('company.register')); ?>">New User</a>
													<a class="dropdown-item" href="<?php echo e(route('company.login')); ?>">Existing User</a>
													</a>
										</div>
									</li>
								<?php else: ?>


							

								
							
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											<?php echo e(Auth::guard('company')->user()->name); ?> <span class="caret"></span>
										</a>

										

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="<?php echo e(route('company.profile.show', Auth::guard('company')->user())); ?>">Profile</a>
											<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												<?php echo e(__('Logout')); ?>

											</a>

									<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
												<?php echo csrf_field(); ?>
											</form>
										</div>
									</li>
								<?php endif; ?>
								<li class="nav-item ">
									<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Job Alert
									<span class="sr-only">(current)</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- Navigation -->
			</header>
			
		</section>
		
		
		<?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->make('partials.job_alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<footer class="footer-bg pt-5 pb-2">
			<div class="container">
				
			</div>
				<div class="bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						2020 Jobs Lawbee. All rights reserved
						</div>

						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<p class="d-flex"><span class="mr-2"><i class="fa fa-envelope purple-text" aria-hidden="true"></i></span> admin@jobslawbee.com</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-r footer-list" >
							<li><a style="color: #fff;" href="<?php echo e(url('privacy')); ?>">Privacy Policy</a></li>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-list">
						<li><a style="color: #fff;" href="<?php echo e(url('terms')); ?>">Terms and Conditions</a></li>
						</div>
					</div>
					<div class="row text-center">
						<div class="col-md-12">
							<span class="text-center powerer_by_text">Powered by</span>
							<img class="text-center" style="height: 100px;" src="<?php echo e(asset('template/images/YWC-logo.png')); ?>" />
						</div>
					</div>
				</div>
			</div>
		</footer>

		<div class="modal" id="custom-messenger">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Message</h6>
						<button type="button" class="close coloredClose closeCustomModal" data-dismiss="modal" aria-label="Close">
							<i class="fa fa-window-close" aria-hidden="true"></i>
						</button>
					</div>
					<div class="modal-body">
						<p id="customMsg"></p>
					</div>
					
				</div>
			</div>
		</div>

		<script>
			function show_custom_alert(message) {
				// console.log(message);
				var custom_modal = document.getElementById('custom-messenger');
				var close_modal0 = document.getElementsByClassName("closeCustomModal")[0];
				var close_modal1 = document.getElementsByClassName("closeCustomModal")[1];
				var custom_message = document.getElementById('customMsg');
				var customMessageTracked = '';

				if(Array.isArray(message)){
					customMessageTracked = "<ul style='color: red;'>";
					// for(let i=0; i<message.length; i++){
					// 	customMessageTracked += "<li>"+ message[i] +"</li>";
					// }

					for(key in message){
					    customMessageTracked += "<li>"+ message[key] +"</li>";
					}
					customMessageTracked += "</ul>";
				} else {
					customMessageTracked = message;
				}

				custom_message.innerHTML = customMessageTracked;

				custom_modal.style.display = 'block';

				// When the user clicks on (x), close the modal
				close_modal0.onclick = function() {
					custom_modal.style.display = 'none';
				}

				// When the user clicks on close button, close the modal
				close_modal1.onclick = function() {
					custom_modal.style.display = 'none';
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == custom_modal) {
						custom_modal.style.display = 'none';
					}
				}
			}
		</script>

		<?php if( session('success') ): ?>
			<?php
				$custom_message = session('success');
				echo "<script>show_custom_alert(`<span style=\"color: green\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i> $custom_message</span>`)</script>";
			?>
		<?php endif; ?>

		<?php if( session('failure') ): ?>
			<?php
				$custom_message = session('failure');
				echo "<script>show_custom_alert(`<span style=\"color: red\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> $custom_message</span>`)</script>";
			?>
		<?php endif; ?>

		<?php if( $errors->any() ): ?>
			<?php $data = '<ul>' ?>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php
					$data .= '<li>'. $error .'</li>'
				?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php $data .= '</ul>' ?>

			<?php
				echo "<script>show_custom_alert(`<span style=\"color: red\">$data</span>`)</script>";
			?>
		<?php endif; ?>



		<!-- Bootstrap core JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<script src="<?php echo e(asset('template/js/bootstrap.bundle.min.js')); ?>"></script>
		<script src="<?php echo e(asset('template/js/aos.js')); ?>"></script>
        <script>
			AOS.init({
			   duration: 1200,
			});
		</script>
		<script>
			$(document).ready(function(){
				$('.nav-item').on("click",function(){
					$('.nav-item').removeClass('active');
					$(this).addClass('active');
				})
			})

		</script>

	   <?php echo $__env->yieldPushContent('scripts'); ?>



		<?php echo $__env->make('partials.tawkTo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	</body>
</html>
<?php /**PATH C:\xampp\htdocs\joblawbee\resources\views/layouts/template-search.blade.php ENDPATH**/ ?>