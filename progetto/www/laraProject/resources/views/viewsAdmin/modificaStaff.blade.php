@extends('layoutsAdmin.admin')
@section('title', 'Modifica Staff')
@section('content')

<div class="container">
    <div class="col-sm-6">
        <div class="signup-form">
            {{ Form::open(array('route' => 'modificaStaff.modifica'))}}
            @csrf

            <div>
                {{ Form::label('nome', 'Nome')}}
                {{ Form::text('nome', '', ['id' => 'nome']) }}
            </div>

            <button  type="submit" class="btn btn-default add-to-cart">Conferma</button>
        </div>
    </div>
</div>

@endsection