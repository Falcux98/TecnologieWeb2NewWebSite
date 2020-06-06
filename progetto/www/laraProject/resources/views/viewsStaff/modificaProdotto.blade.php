@extends('layoutsStaff.staff')
@section('title', 'Modifica Prodotto')

@section('scripts')
    @parent 
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            var actionRoute = "{{ route('modificaProdotto.modifica') }}";
            var formId = "editProd";

            $(':input').on('blur', function(event){
                var elementId = $(this).attr('id');
                elementValidation(elementId, actionRoute, formId);
            });


            $('#editProd').on('submit', function(event){
                event.preventDefault();
                formValidation(actionRoute, formId);
            });

        });
    </script>
    
@endsection

@section('content')

<div class="container">
    <div class="col-sm-6">
        <h2>Modifica Prodotto:<h3>&nbsp</i>{{ $prod->codProdotto }}</h3></h2>
        <div class="signup-form">
                {{ Form::model($prod, array('route' => 'modificaProdotto.modifica', 'id' => 'editProd', 'files' => true))}}
                @csrf
                <div>
                    {{ Form::hidden('codProdotto', old('codProdotto'), ['id' => 'codProdotto'])}}
                </div>

                <div>
                    {{ Form::label('nome', 'Nome Prodotto*')}}
                    {{ Form::text('nome', old('name'), ['id' => 'nome'])}}
                </div>


                <div>
                    {{ Form::label('descrizioneBreve', 'Descrizione Breve*') }}
                    {{ Form::text('descrizioneBreve',  old('descrizioneBreve'), ['id' => 'descrizioneBreve'])}}
                </div>



                <div>
                    {{ Form::label('descrizioneEstesa', 'Descrizione Estesa*') }}
                    {{ Form::text('descrizioneEstesa', old('descrizioneEstesa'), ['id' => 'descrizioneEstesa'])}}
                </div>

                <div>
                    {{ Form::label('prezzo', 'Prezzo')}}
                    {{ Form::number('prezzo', old('prezzo'), ['id' => 'prezzo'])}}
                </div>

                <div>
                    {{ Form::hidden('foto', old('foto'), ['id' => 'foto'])}}
                </div>

                <div>
                    {{ Form::label('newfoto', 'Foto')}}
                    {{ Form::file('newfoto', ['id' => 'newfoto', 'style' => 'background: none'])}}
                </div>


                <div>
                    {{ Form::label('percentualeSconto', ' Percentuale Sconto')}}
                    {{ Form::number('percentualeSconto', old('percentualeSconto'), ['id' => 'percentualeSconto', 'min' => '0', 'max' => '100'])}}
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
            </div>
                <button  type="submit" class="btn btn-default add-to-cart" href="{{route ('Catalog')}}">Annulla</button>
                <button type="submit" class="btn btn-default add-to-cart">Modifica Prodotto</button>
                {{ Form::close()}}
    </div>

</div>

@endsection
