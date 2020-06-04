@extends('layoutsStaff.staff')
@section('content')

@section('content')


<div class="container">
    <div class="col-sm-6">
        <h2>Modifica Prodotto:<h3>&nbsp</i>{{ $prod->codProdotto }}</h3></h2>
        <div class="signup-form">
                {{ Form::model($prod, array('route' => 'modificaProdotto.modifica'))}}
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
                    {{ Form::label('descrizioneEstesa', 'Descrizione Estesa') }}
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
                    {{ Form::label('percentualeSconto', ' Percentuale Sconto (se in sconto)')}}
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
                    {{ Form::label('inPromozione', 'in Promozione')}}
                    {{ Form::number('inPromozione', old('inPromozione'), ['id' => 'inPromozione', 'min' => '0', 'max' => '1'])}}
                    @if($errors->first('inPromozione'))
                    <ul>
                        @foreach ($errors->get('inPromozione') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div>
                    <label for="sottocategoria">Categoria</label>
                    <select name="sottocategoria" id="sottocategoria" style="margin-bottom: 3%">
                        @foreach ($_categories as $category)
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


                <button type="submit" class="btn btn-default" style="margin-bottom: 5%;" value="Modifica Prodotto">Modifica Prodotto</button>
                <button  type="submit" class="btn btn-default add-to-cart" href="{{route ('Catalog')}}">Annulla</button>
                {{ Form::close()}}
        </div>
    </div>

</div>
