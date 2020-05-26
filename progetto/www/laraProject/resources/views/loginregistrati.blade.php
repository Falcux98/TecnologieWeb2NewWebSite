@extends('layouts.public')

@section('title', 'Login Registrati')
@section('content')
<div>
<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Collegati al tuo account!</h2>
						<form action="#">
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
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Registrati!</h2>
						<form action="#">
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
@endsection

