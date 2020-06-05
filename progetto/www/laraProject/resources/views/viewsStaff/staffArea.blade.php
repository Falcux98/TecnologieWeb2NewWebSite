@extends('layoutsStaff.staff')
@section('title', 'Area Staff')
@section('content')

@section('scripts')

    @parent 
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            var actionRoute = "{{ route('StaffArea.store') }}";
            var formId = "addProd"

            $(':input').on('blur', function(ebvent){
                var elementId = $(this).attr('id');
                console.log(elementId);
                elementValidation(elementId, actionRoute, formId);
            });

            $('#addProd').on('submit', function(event){
                event.preventDefault();
                formValidation(actionRoute, formId);
            })
        });
    </script>


@endsection

<h2 class="title text-center" style="font-size: 25px; justify-content: space-around">Prodotti</h2>
<div class="container" style="width:60%; margin-bottom: 3%;">
    
    <div class="col-sm-12">
        <h2 class="title text-center">Aggiungi</h2>
        <div class="signup-form"><!--sign up form-->
                {{ Form::open(array('route' => 'StaffArea.store', 'id' => 'addProd', 'files' => true ))}}
                @csrf
                <div>
                    {{ Form::label('nome', 'Nome Prodotto')}}
                    {{ Form::text('nome', '', ['id' => 'nome'])}}
                </div>
                
    
                <div>
                    {{ Form::label('descrizioneBreve', 'Descrizione Breve') }}
                    {{ Form::text('descrizioneBreve', '', ['id' => 'descrizioneBreve'])}}
                </div>
                
    
    
                <div>
                    {{ Form::label('descrizioneEstesa', 'Descrizione Estesa') }}
                    {{ Form::text('descrizioneEstesa', '', ['id' => 'descrizioneEstesa'])}}
                </div>
               
                <div>
                    {{ Form::label('prezzo', 'Prezzo')}}
                    {{ Form::number('prezzo', '', ['id' => 'prezzo'])}}
                </div>
    
                <div>
                    {{ Form::label('foto', 'Foto')}}
                    {{ Form::file('foto', ['id' => 'foto', 'style' => 'background: none'])}}
                </div>
                
                <div>
                    {{ Form::label('percentualeSconto', ' Percentuale Sconto (se in sconto)')}}
                    {{ Form::number('percentualeSconto', '', ['id' => 'percentualeSconto', 'min' => '0', 'max' => '100'])}}
                </div>           
               
    
                <div>
                    <label for="sottocategoria">Categoria</label>
                    <select name="sottocategoria" id="sottocategoria" style="margin-bottom: 3%">
                        @foreach ($categories as $category)
                           <optgroup label="{{ $category->nome }}">
                                @foreach ($subCategories as $subCategory)
                                    @if($subCategory->categoria == $category->codCategoria)
                                    <option value="{{ $subCategory->codSottocategoria }}" {{ old('codSottocategoria') == $subCategory->codSottocategoria ? 'selected' : '' }}> {{ $subCategory->nome}}</option>
                                    @endif
                                @endforeach
                            </optgroup>                        
                        @endforeach
                    </select>
                </div>
    
                <button type="submit" class="btn btn-default" style="margin-bottom: 5%;" value="Aggiungi Prodotto">Crea Prodotto</button>
                {{ Form::close()}}
        </div>
    </div>

</div>

<h2 class="title text-center" style="font-size: 25px; justify-content: space-around">Categorie & Sottocategorie</h2>
<div class="container">
    <div class="col-sm-6">
        <h2 class="title text-center">Aggiungi Categoria</h2>
        <div class="signup-form">
            {{ Form::open(array('route' => 'StaffArea.aggiungiCategoria'))}}

        <div>
            {{ Form::label('nome', 'Nome')}}
            {{ Form::text('nome', '', ['id' => 'nome'])}}
        </div>

        <button type="submit" class="btn btn-default" style="margin-bottom: 5%;" value="Aggiungi Prodotto">Aggiungi</button>
        {{ Form::close()}}    
    </div>      
        
    </div>

    <div class="col-sm-6">
        <h2 class="title text-center">Aggiungi Sotto-Categoria</h2>
        <div class="signup-form">
            {{ Form::open(array('route' => 'StaffArea.aggiungiSottocategoria'))}}

            <div>
                {{ Form::label('categoria', 'Categoria')}}
                <select name="categoria" id="categoria" style="margin-bottom: 3%">
                    @foreach ($categories as $category)
                       <option value="{{ $category->codCategoria }}" label="{{ $category->nome }}"></option>
                    @endforeach
                </select>
                @if($errors->first('categoria'))
                <ul>
                @foreach ($errors->get('categoria') as $message)
                    <li>{{ $message }}</li>
                @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('nome', 'Nome sottocategoria')}}
                {{ Form::text('nome', '', ['id' => 'nome'])}}
                @if($errors->first('nome'))
                <ul>
                @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                @endforeach
                </ul>
                @endif
            </div>

            <button type="submit" class="btn btn-default" style="margin-bottom: 5%;" value="Aggiungi Prodotto">Aggiungi</button>
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection