<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('css\animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\prettyPhoto.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\price-range.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\price-range.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css\responsive.css')); ?>">
    <title>TecWeb | <?php echo $__env->yieldContent('title', 'Home'); ?></title>
</head>
<body>
    
    <header id="header">
        <?php echo $__env->make('layouts._navpublic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
	
	<section>
    <div class="container">
		<div class="row">
            <?php echo $__env->yieldContent('content'); ?>
		</div>
        
	</div>
</section>
    
    
    
    
    	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">

					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Termini di servizio</a></li>
								<li><a href="<?php echo e(route('Privacy Policy')); ?>">Privacy Policy</a></li>
							</ul>
						</div>
					</div>

					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 Tecnologie WEB | All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

	<script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>	
	<script type="text/javascript" src="<?php echo e(asset('js/jquey.prettyPhoto.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/price-range.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TWeb2\TecnologieWeb2NewWebSite\progetto\www\laraProject\resources\views/layouts/public.blade.php ENDPATH**/ ?>