@extends('layoutsAdmin.admin')
@section('title', 'Area Admin')

@section('scripts')
    
    @parent
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            var actionRoute = "{{ route('AdminArea.addStaff') }}";
            var formId = "addStaff";
            console.log('hello');

            $(' :input').on('blur', function(event){
                var elementId = $(this).attr('id');
                elementValidation(elementId, actionRoute, formId);
            });

            $('#addStaff').on('submit', function(event){
                event.preventDefault();
                formValidation(actionRoute, formId);
            });
        });
    </script>

@endsection

@section('content')

<div class="container">
    <h2 class=" title text-center" style="font-size: 30px"> Staff</h1>
<div class="col-sm-6">
    <h2 class="title text-center">Aggiungi Membro staff</h2>
    <div class="signup-form">
        {{ Form::open(array('route' => 'AdminArea.addStaff', 'id' => 'addStaff'))}}
        @csrf

        <div>
            {{ Form::label('nome', 'Nome *')}}
            {{ Form::text('nome', '', ['id' => 'nome'])}}
        </div>

        <div>
            {{ Form::label('cognome', 'Cognome *')}}
            {{ Form::text('cognome', '', ['id' => 'cognome'])}}
        </div>

        <div>
            {{ Form::label('dataNascita', 'Data di Nascita') }}
            {{ Form::date('dataNascita', '', ['id' => 'dataNascita'])}}
        </div>

        <div>
            {{ Form::label('occupazione', 'Occupazione')}}
            {{ Form::select('occupazione', $occupazione, '', ['id'=>'occupazione', 'style="margin-bottom: 10px"'])}}
        </div>

        <div>
            {{ Form::label('residenza', 'Residenza')}}
            {{ Form::text('residenza', '', ['id'=>'residenza'])}}
        </div>

        <div>
            {{ Form::label('username', 'Username *')}}
            {{ Form::text('username', '', ['id' => 'username'])}}
        </div>


        <div>
            {{ Form::label('password', 'Password *')}}
            {{ Form::password('password', ['id' => 'password'])}}
        </div>

        <div>
            {{ Form::label('password_confirmation', 'Conferma Password *') }}
            {{ Form::password('password_confirmation', ['id' => 'password_confirmation'])}}
        </div>

        <p>* campo obbligatorio</p>

        <button type="submit" class="btn btn-default" style="margin-bottom: 5%;" value="AggiungiMembro">Aggiungi</button>
        {{ Form::close() }}
    </div>
</div>

<div class="col-sm-6">

    <h2 class="title text-center">Lista Membri staff</h2>
    @if (!empty($staffs))
    <ul>
        @foreach ($staffs as $staffMember)
            <li>
                <div class="row" style="display: flex; justify-content:space-around ; align-items:baseline; border-bottom: 2px solid rgb(200,200,200);">
                    <h3 class="innerh2" style="width: 50%;">{{ $staffMember->nome}} {{ $staffMember->cognome }}</h3>
                    <a href="{{ route('removeConf', [$staffMember->username]) }}" style="" class="btn btn-default add-to-cart">Rimuovi</a>
                    <a href="{{ route('showModificaStaff', [$staffMember->username]) }}" style="" class="btn btn-default add-to-cart">Modifica</a>
                </div>
            </li>
        @endforeach
    </ul>   
    @endif
</div>
</div>

<div class="container" style="margin-top: 5%; align-content: center">
    <h2 class="title text-center" style="font-size: 30px">Lista Utenti registrati</h1>
    <div class="col-sm-11">
        
        @if (!empty($users))
        <ul>
            @foreach ($users as $user)
            <li>
                <div class="row" style="display: flex; justify-content:space-around ; align-items:baseline; border-bottom: 2px solid rgb(200,200,200);">
                    <h3 class="innerh2" style="width:50%">{{ $user->nome }} {{ $user->cognome }}</h3>
                    <a href="{{ route('removeConf', [$user->username]) }}" style="" class="btn btn-default add-to-cart">Rimuovi</a>
                </div>
            </li>                
            @endforeach
        </ul>            
        @endif
    </div>
</div>

@endsection