@extends('layoutsAdmin.admin')
@section('title', 'Area Admin')

@section('content')

<div class="col-sm-6">
    <div class="signup-form">
        <h1>Aggiungi Memebro Staff</h1>
        {{ Form::open(array('route' => 'AdminArea.addStaff'))}}
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
            {{ Form::password('password_confirmation', ['id' => 'password_confirmation'])}}
            @if($errors->first('password_confirmation'))
            <ul>
                @foreach ($errors->get('password_confirmation') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <button type="submit" class="btn btn-default" style="margin-bottom: 5%;" value="AggiungiMembro">Aggiungi</button>
    </div>
</div>

<div class="col-sm-6">

    <h1>Lista Membri Staff</h1>
    @if (!empty($staffs))
    <ul>
        @foreach ($staffs as $staffMember)
            <li>
                <h3>{{ $staffMember->nome}} {{ $staffMember->cognome }}</h3>
            </li>
        @endforeach
    </ul>
        
    @endif
</div>

@endsection