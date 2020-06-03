@extends('layouts.public')
@section('title', 'Registrazione')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
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
                                    <div>
                                        {{ Form::label('occupazione', 'Occupazione')}}
                                        @isset($occupations)

                                        <select name="occupazione" id="occupazione" style="margin-bottom: 3%">
                                            @foreach ($occupations as $occupazione)
                                               <option label="{{ $occupazione->nome }}"></option>
                                            @endforeach
                                        </select>
                                    </div>
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
                            <div class="col-md-6 offset-md-4">
                                <div class="container-form-btn">
                                    {{ Form::submit('Registra', ['class' => 'btn btn-default']) }}
                                </div>

                            </div>
                        </div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
