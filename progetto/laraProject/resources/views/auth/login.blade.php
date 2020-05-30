@extends('layouts.public')

@section('title', 'Login Registrati')
@section('content')
<div>
<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        @csrf
						<h2>Collegati al tuo account!</h2>
                        {{ Form::open(array('route' => 'loginregistrati', 'class' => 'contact-form')) }}
                        {{ csrf_field() }}
                        <div>
                            {{ Form::label('username', 'Username')}}
                            {{ Form::text('username', '', ['id' => 'username'])}}
                            @if($errors->first('username'))
                            <ul>
                                @foreach ($errors->get('username') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>

                        <div>
                            {{ Form::label('password', 'Password')}}
                            {{ Form::password('password', ['id' => 'password'])}}
                            @if($errors->first('password'))
                            <ul>
                                @foreach ($errors->get('password') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>

            				<span>
								<input type="checkbox" class="checkbox">
								Rimani collegato
							</span>
                            <div class="container-form-btn">
                                <button  type="submit" class="btn btn-default add-to-cart" href={{route('loginregistrati') }}>Login</button>
                            </div>

                            {{ Form::close() }}
					</div><!--/login form-->







				</div>
				<div class="col-sm-1">
					<h2 class="or">O</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Registrati!</h2>
                        <form action="{{ URL::to('/') }}" method="post">
                            @csrf
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
