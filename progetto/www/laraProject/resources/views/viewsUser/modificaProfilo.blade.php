@extends('layoutsUser.user')
@section('title', 'Modifica Profilo')

@section('scripts')
    @parent 
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            var actionRoute = "{{ route('modificaUser.modifica') }}";
            var formId = "editProfile";

            $(':input').on('blur', function(event){
                var elementId = $(this).attr('id');
                elementValidation(elementId, actionRoute, formId);
            });


            $('#editProf').on('submit', function(event){
                event.preventDefault();
                formValidation(actionRoute, formId);
            });

        });
    </script>
    
@endsection

@section('content')

<div class="container">
    <div class="col-sm-6">
        <h2>Modifica Profilo:<h3><i class="fa fa-user">&nbsp</i>{{ $user->username }}</h3></h2>
        <div class="signup-form">
            {{ Form::model($user, array('route' => 'modificaUser.modifica', 'id' => 'editProfile'))}}
            @csrf

            {{ Form::hidden('username', old('username'))}}

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
                {{ Form::select('occupazione', $occupations, old('occupazione'), ['id' => 'occupazione']) }}
            </div>

            <div>
                {{ Form::label('residenza', 'Residenza')}}
                {{ Form::text('residenza', old('residenza'), ['id' => 'residenza']) }}

            </div>

            <p>* campi obbligatori</p>
        </div>
            <button  type="submit" class="btn btn-default add-to-cart" href="{{route ('AreaPersonale')}}">Annulla</button>
            <button  type="submit" class="btn btn-default add-to-cart">Modifica</button>
            {{ Form::close() }}

    </div>
</div>

@endsection
