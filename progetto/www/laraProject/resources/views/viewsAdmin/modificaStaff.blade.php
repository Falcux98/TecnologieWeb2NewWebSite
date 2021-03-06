@extends('layoutsAdmin.admin')
@section('title', 'Modifica Staff')

@section('scripts')
@parent
<script src="{{ asset('js/validation.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function(){
        var actionRoute = "{{ route('modificaStaff.modifica') }}";
        var formId = "editStaff";

        $(':input').on('blur', function(event){
            var elementId = $(this).attr('id');
            elementValidation(elementId, actionRoute, formId);
        });


        $('#editStaff').on('submit', function(event){
            event.preventDefault();
            formValidation(actionRoute, formId);
        });
    });
</script>

@endsection
@section('content')

<div class="container">
    <div class="col-sm-6">
        <h2>Modifica {{ $staff->nome }} {{ $staff->cognome}}</h2>
        <div class="signup-form">
            {{ Form::model($staff, array('route' => 'modificaStaff.modifica', 'id' => 'editStaff'))}}
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
                {{ Form::select('occupazione', $occupations, old('occupazione'), ['id' => 'occupazione', 'style' => 'margin-bottom: 10px']) }}
            </div>

            <div>
                {{ Form::label('residenza', 'Residenza')}}
                {{ Form::text('residenza', old('residenza'), ['id' => 'residenza']) }}
            </div>

            <p>* campi obbligatori</p>           
            
            </div>
            <a class="btn btn-default add-to-cart" onclick="window.history.go(-1)">Annulla</a>
            <button  type="submit" class="btn btn-default add-to-cart">Modifica</button>
            {{ Form::close() }}
    </div>
</div>

@endsection
