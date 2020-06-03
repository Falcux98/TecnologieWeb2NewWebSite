@extends('layoutsAdmin.admin')
@section('title', 'Modifica Staff')
@section('content')

<div class="container">
    <div class="col-sm-6">
        <h2>Modifica {{ $staff->nome }} {{ $staff->cognome}}</h2>
        <div class="signup-form">
            {{ Form::model($staff, array('route' => 'modificaStaff.modifica'))}}
            @csrf

            {{ Form::hidden('username', old('username'))}}

            <div>
                {{ Form::label('nome', 'Nome *')}}
                {{ Form::text('nome', old('name'), ['id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul>
                    @foreach ($errors->get('nome') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>                    
                @endif
            </div>

            <div>
                {{ Form::label('cognome', 'Cognome *')}}
                {{ Form::text('cognome', old('cognome'), ['id' => 'cognome']) }}
                @if ($errors->first('cognome'))
                <ul>
                    @foreach ($errors->get('cognome') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>                    
                @endif
            </div>

            <div>
                {{ Form::label('dataNascita', 'Data di nascita *')}}
                {{ Form::date('dataNascita', old('dataNascita'), ['id' => 'dataNascita'])}}
                @if ($errors->first('dataNascita'))
                <ul>
                    @foreach ($errors->get('dataNascita') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>                    
                @endif
            </div>

            <div>
                {{ Form::label('occupazione', 'Occupazione')}}
                {{ Form::text('occupazione', old('occupazione'), ['id' => 'occupazione']) }}
                @if ($errors->first('occupazione'))
                <ul>
                    @foreach ($errors->get('occupazione') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>                    
                @endif
            </div>

            <div>
                {{ Form::label('residenza', 'Residenza')}}
                {{ Form::text('residenza', old('residenza'), ['id' => 'residenza']) }}
                @if ($errors->first('residenza'))
                <ul>
                    @foreach ($errors->get('residenza') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>                    
                @endif
            </div>

            <p>* campi obbligatori</p>

            <button  type="submit" class="btn btn-default add-to-cart">Modifica</button>
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection