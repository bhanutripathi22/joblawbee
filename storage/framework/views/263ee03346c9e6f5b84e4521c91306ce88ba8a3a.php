<!DOCTYPE html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta property="og:title" content="Jobs Lawbee">
		<meta property="og:image" content="<?php echo e(asset('template/images/logo-job120X120.jpg')); ?>">
		<meta property="og:description" content="Jobs Lawbee is the first legal job search provider in India. It is an excellent solution for independent lawyers, law firms, companies and organisations, to reach out to the global pool of graduates and highly skilled legal professionals. Jobs Lawbee helps legal professionals to take a big step in their career enhancement.">
		<title>Jobs Lawbee</title>
		<!-- CSS -->
		<link rel="icon" href="<?php echo e(asset('template/images/fav-icon.png')); ?>" type="image/x-icon" />
		<link href="<?php echo e(asset('template/css/bootstrap.min.css')); ?>" rel="stylesheet">
		<link  href="<?php echo e(asset('template/css/bootstrap.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('template/style.css')); ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo e(asset('template/css/aos.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('template/css/animate.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('template/css/responsive.css')); ?>">

		<style>
			.card {
				background-color: #fff; background-clip: border-box; border: 1px solid rgba(0, 0, 0, 0.125);
			}
		</style>

		<?php echo $__env->yieldContent('styles'); ?>
		
	</head>
	<body>
		<section class="banner-bg">
			<!-- Navigation -->
			<header>
				<nav class="navbar navbar-expand-lg navbar-dark black-bg static-top" id="myHeader">
					<div class="container">
						<a class="navbar-brand" href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('template/images/logo-job.png')); ?>"/></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbar">
							<ul class="navbar-nav ml-auto">
								
								

								<?php if(auth()->guard()->guest()): ?>
									<li class="nav-item active">
										<a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
										  
										<span class="sr-only">(current)</span>
									</li>



									<?php if(Route::has('register')): ?>
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
										</li>
									<?php endif; ?>
								<?php else: ?>
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
							</ul>
						</div>
					</div>   
				</nav>
				<!-- Navigation -->
			</header>
			
		</section>
		<?php echo $__env->yieldContent('content'); ?>
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
		<!-- Bootstrap core JavaScript -->

		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?php echo e(asset('template/jquery/jquery.slim.min.js')); ?>"></script>
		<script src="<?php echo e(asset('template/js/bootstrap.bundle.min.js')); ?>"></script>
		<script src="<?php echo e(asset('template/js/aos.js')); ?>"></script>
		<script> 
			AOS.init({
			   duration: 1200,
			});
		</script>


	


		<?php echo $__env->yieldPushContent('scripts'); ?>
	</body>
</html><?php /**PATH /home/findnearby/public_html/joblawbee/resources/views/layouts/template-admin.blade.php ENDPATH**/ ?>