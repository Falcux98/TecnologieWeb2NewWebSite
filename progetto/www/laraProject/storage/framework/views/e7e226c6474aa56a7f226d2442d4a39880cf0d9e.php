

<?php $__env->startSection('title', 'Login Registrati'); ?>
<?php $__env->startSection('content'); ?>
<div>
<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">







					<div class="login-form"><!--login form-->
						<h2>Collegati al tuo account!</h2>
						<form method="post" action="<?php echo e(url('Auth/LoginController')); ?>">
						<?php echo e(csrf_field()); ?>

							<input type="username" placeholder="Username" />
							<input type="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox">
								Rimani collegato
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->







				</div>
				<div class="col-sm-1">
					<h2 class="or">O</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Registrati!</h2>
						<form action="<?php echo e(URL::to('/')); ?>" method="post">
							<input type="username" placeholder="Username"/>
							<input type="text" placeholder="Nome"/>
							<input type="text" placeholder="Cognome"/>
							<input type="date" placeholder="Data di nascita"/>
							<input type="text" placeholder="Occupazione"/>
							<input type="text" placeholder="Residenza"/>
							<input type="password" placeholder="Password"/>
							<input type="confermaPassword" placeholder="Conferma Password"/>
							<button type="submit" class="btn btn-default">Registrati</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TWeb2\TecnologieWeb2NewWebSite\progetto\www\laraProject\resources\views/auth/login.blade.php ENDPATH**/ ?>