@extends('layouts.staff')
@section('title', 'Area Staff')
@section('content')

<div class="col-sm-9">
    <div class="signup-form"><!--sign up form-->
        <h1>Aggiungi Prodotto</h1>
            {{ Form::open(array('route' => 'StaffArea.store', 'files' => true ))}}
            @csrf
            <div>
                {{ Form::label('nome', 'Nome Prodotto')}}
                {{ Form::text('nome', '', ['id' => 'nome'])}}
                @if($errors->first('nome'))
                <ul>
                @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                @endforeach
                </ul>
                 @endif
            </div>
            

            <div>
                {{ Form::label('descrizioneBreve', 'Descrizione Breve') }}
                {{ Form::text('descrizioneBreve', '', ['id' => 'descrizioneBreve'])}}
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
                {{ Form::text('descrizioneEstesa', '', ['id' => 'descrizioneEstesa'])}}
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
                {{ Form::number('prezzo', '', ['id' => 'prezzo'])}}
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
                {{ Form::number('percentualeSconto', '', ['id' => 'percentualeSconto', 'min' => '0', 'max' => '100'])}}
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

            <button type="submit" class="btn btn-default" style="margin-bottom: 5%;" value="Aggiungi Prodotto">Crea Prodotto</button>
        </form>
    </div>
</div>

@endsection