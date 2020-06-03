@extends('layoutsAdmin.admin')
@section('title', 'Rimuovi Staff')
@section('content')

@isset($user)
    {{ Form::open(array('route' => 'AdminArea.removeStaff'))}}

    {{ csrf_field() }}

        <h2>Eliminare {{ $user->nome }} ?</h2>
        <input type="hidden" value="{{ $user->username }}" name="delete">
        <p>Eliminare definitivamenente {{ $user->nome }} {{ $user->cognome}} dagli {{ $user->role }} del sito?</p>
        <a class="btn btn-default add-to-cart" href="{{route('AdminArea') }}">Annulla</a>
        <button  type="submit" class="btn btn-default add-to-cart">Conferma</button>
    
    {{ Form::close()}}
@endisset

@endsection
