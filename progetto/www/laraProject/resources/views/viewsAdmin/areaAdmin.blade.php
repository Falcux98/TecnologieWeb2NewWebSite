@extends('layoutsAdmin.admin')
@section('title', 'Area Admin')

@section('content')

<div class="container" style="border-bottom: 1px solid black;">
    <h1> Staff</h1>
<div class="col-sm-6">
    <div class="signup-form">
        <h2>Aggiungi Membro</h2>
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

    <h3>Lista Membri</h2>
    @if (!empty($staffs))
    <ul>
        @foreach ($staffs as $staffMember)
            <li>
                <div class="row" style="display: flex; justify-content:space-around ; align-items:baseline; border-bottom: 2px solid rgb(200,200,200);">
                    <h3 style="width: 50%;">{{ $staffMember->nome}} {{ $staffMember->cognome }}</h3>
                    <a href="{{ route('removeConf', [$staffMember->username]) }}" style="" class="btn btn-default add-to-cart">Rimuovi</a>
                    <a href="{{ route('showModificaStaff', [$staffMember->username]) }}" style="" class="btn btn-default add-to-cart">Modifica</a>
                </div>
            </li>
        @endforeach
    </ul>   
    @endif
</div>
</div>

<div class="container" style="margin-top: 5%">
    <div class="col-sm-6">
        <h1>Lista Utenti</h1>
        @if (!empty($users))
        <ul>
            @foreach ($users as $user)
            <li>
                <div class="row" style="display: flex; justify-content:space-around ; align-items:baseline; border-bottom: 2px solid rgb(200,200,200);">
                    <h3>{{ $user->nome }} {{ $user->cognome }}</h3>
                    <a href="{{ route('removeConf', [$user->username]) }}" style="" class="btn btn-default add-to-cart">Rimuovi</a>
                </div>
            </li>                
            @endforeach
        </ul>            
        @endif
    </div>
</div>

@endsection