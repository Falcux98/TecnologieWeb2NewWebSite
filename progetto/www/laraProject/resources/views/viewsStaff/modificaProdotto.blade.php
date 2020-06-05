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
            })

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
                    {{ Form::label('nome', 'Nome Prodotto*')}}
                    {{ Form::text('nome', old('name'), ['id' => 'nome'])}}
                    @if($errors->first('nome'))
                    <ul>
                    @foreach ($errors->get('nome') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                    </ul>
                     @endif
                </div>


                <div>
                    {{ Form::label('descrizioneBreve', 'Descrizione Breve*') }}
                    {{ Form::text('descrizioneBreve',  old('descrizioneBreve'), ['id' => 'descrizioneBreve'])}}
                    @if($errors->first('descrizioneBreve'))
                    <ul>
                        @foreach ($errors->get('descrizioneBreve') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>



                <div>
                    {{ Form::label('descrizioneEstesa', 'Descrizione Estesa*') }}
                    {{ Form::text('descrizioneEstesa', old('descrizioneEstesa'), ['id' => 'descrizioneEstesa'])}}
                    @if($errors->first('descrizioneEstesa'))
                    <ul>
                        @foreach ($errors->get('descrizioneEstesa') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div>
                    {{ Form::label('prezzo', 'Prezzo')}}
                    {{ Form::number('prezzo', old('prezzo'), ['id' => 'prezzo'])}}
                    @if($errors->first('prezzo'))
                    <ul>
                        @foreach ($errors->get('prezzo') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div>
                    {{ Form::label('foto', 'Foto')}}
                    {{ Form::file('foto', ['id' => 'foto', 'style' => 'background: none'])}}
                    @if($errors->first('foto'))
                    <ul>
                        @foreach ($errors->get('foto') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                </div>


                <div>
                    {{ Form::label('percentualeSconto', ' Percentuale Sconto')}}
                    {{ Form::number('percentualeSconto', old('percentualeSconto'), ['id' => 'percentualeSconto', 'min' => '0', 'max' => '100'])}}
                    @if($errors->first('percentualeSconto'))
                    <ul>
                        @foreach ($errors->get('percentualeSconto') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
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

                    @if($errors->first('sottocategoria'))
                    <ul>
                        @foreach ($errors->get('sottocategoria') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
                <button  type="submit" class="btn btn-default add-to-cart" href="{{route ('Catalog')}}">Annulla</button>
                <button type="submit" class="btn btn-default add-to-cart">Modifica Prodotto</button>
                {{ Form::close()}}
    </div>

</div>

@endsection
