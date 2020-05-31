@extends('layoutsAdmin.admin')
@section('title', 'Rimuovi Staff')
@section('content')

@isset($staff)
    {{ Form::open(array('route' => 'AdminArea.removeStaff'))}}

    {{ csrf_field() }}

        <h2>Eliminare {{ $staff->nome }} ?</h2>
        <input type="hidden" value="{{ $staff->username }}" name="delete">
        <p>Eliminare definitivamenente {{ $staff->nome }} {{ $staff->cognome}} dallo staff del sito?</p>
        <a class="btn btn-default add-to-cart" href="{{route('AdminArea') }}">Annulla</a>
        <button  type="submit" class="btn btn-default add-to-cart">Conferma</button>

</form>
@endisset

@endsection
