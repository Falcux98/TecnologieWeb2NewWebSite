@extends('layoutsAdmin.admin')
@section('title', 'Modifica Staff')
@section('content')

<div class="container">
    <div class="col-sm-6">
        <div class="signup-form">
            {{ Form::model($staff, array('route' => 'modificaStaff.modifica'))}}
            @csrf

            <div>
                {{ Form::label('nome', 'Nome *')}}
                {{ Form::text('nome', old('name'), ['id' => 'nome']) }}
            </div>

            <div>
                {{ Form::label('cognome', 'Cognome *')}}
                {{ Form::text('cognome', old('cognome'), ['id' => 'cognome']) }}
            </div>

            <div>
                {{ Form::label('dataNascita', 'Data di nascita *')}}
                {{ Form::date('dataNascita', old('dataNascita'), ['id' => 'dataNascita'])}}
            </div>

            <div>
                {{ Form::label('occupazione', 'Occupazione')}}
                {{ Form::text('occupazione', old('occupazione'), ['id' => 'occupazione']) }}
            </div>

            <div>
                {{ Form::label('residenza', 'Residenza')}}
                {{ Form::text('residenza', old('residenza'), ['id' => 'residenza']) }}
            </div>

            <div>
                {{ Form::label('email_verified_at', 'Email')}}
                {{ Form::email('email_verified_at', old('email_verified_at'), ['id' => 'email_verifiedat']) }}
            </div>

            <p>* campi obbligatori</p>

            <button  type="submit" class="btn btn-default add-to-cart">Conferma</button>
        </div>
    </div>
</div>

@endsection