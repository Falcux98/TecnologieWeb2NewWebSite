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
                                <button  type="submit" class="btn btn-default" href={{route('loginregistrati') }}>Login</button>
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
                        {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
                        @csrf
                                <div>
                                    {{ Form::label('nome', 'Nome')}}
                                    {{ Form::text('nome', '', ['id' => 'nome'])}}
                                    @if($errors->first('nome'))
                                    <ul>
                                        @foreach ($errors->get('nome') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>

                                <div>
                                    {{ Form::label('cognome', 'Cognome')}}
                                    {{ Form::text('cognome', '', ['id' => 'cognome'])}}
                                    @if($errors->first('cognome'))
                                    <ul>
                                        @foreach ($errors->get('cognome') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div>
                                    {{ Form::label('dataNascita', 'datadiNascita')}}
                                    {{ Form::date('dataNascita', '', ['id' => 'dataNascita'])}}
                                    @if($errors->first('dataNascita'))
                                    <ul>
                                        @foreach ($errors->get('dataNascita') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div>
                                    {{ Form::label('residenza', 'residenza')}}
                                    {{ Form::text('residenza', '', ['id' => 'residenza'])}}
                                    @if($errors->first('residenza'))
                                    <ul>
                                        @foreach ($errors->get('residenza') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>

                                <div>
                                    {{ Form::label('occupazione', 'Occupazione')}}
                                    {{ Form::select('occupazione', $occupations, '', ['id' => 'occupazione'])}}
                                    @if($errors->first('occupazione'))
                                    <ul>
                                        @foreach ($errors->get('occupazione') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>

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

                                <div>
                                    {{ Form::label('password_confirmation', 'Conferma Password') }}
                                    {{ Form::password('password_confirmation', ['password_confirmation'])}}
                                    @if($errors->first('password_confirmation'))
                                    <ul>
                                        @foreach ($errors->get('password_confirmation') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <div class="container-form-btn">
                                    {{ Form::submit('Registra', ['class' => 'btn btn-default']) }}
                                </div>

                            </div>
                        </div>
                        {{ Form::close() }}
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

