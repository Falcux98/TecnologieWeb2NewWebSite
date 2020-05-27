@extends('layouts.staff')
@section('title', 'Area Staff')
@section('content')

    <div class="signup-form"><!--sign up form-->
        <h2>Nuovo Prodotto</h2>
        <form action="{{ route('StaffArea.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Nome Prodotto" name="nome" value="{{ old('nome') }}"/>
            @if($errors->first('nome'))
            <ul>
                @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <input type="text" placeholder="Descrizione Breve" name="descrizioneBreve" value="{{ old('descrizioneBreve') }}"/>

            @if($errors->first('descrizioneBreve'))
            <ul>
                @foreach ($errors->get('descrizioneBreve') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <input type="text" placeholder="Descrizione Estesa" name="descrizioneEstesa" value="{{ old('descrizioneEstesa') }}"/>
            @if($errors->first('descrizioneEstesa'))
            <ul>
                @foreach ($errors->get('descrizioneEstesa') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <input type="number" placeholder="Prezzo" name="prezzo" value="{{ old('prezzo') }}"/>
            @if($errors->first('prezzo'))
            <ul>
                @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <label for="foto" style="margin-top: 3%;">Foto</label>
            <input id="foto" name="foto" type="file" style="background:none;"/>
            @if($errors->first('foto'))
            <ul>
                @foreach ($errors->get('foto') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <input type="number" min="0" placeholder="Percentuale sconto" name="percentualeSconto" value="{{ old('percentualeSconto') }}"/>
            @if($errors->first('percentualeSconto'))
            <ul>
                @foreach ($errors->get('percentualeSconto') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <div>
                <label for="catId">Categoria</label>
                <select name="catId" id="catId" name="sottoCategoria" style="margin-bottom: 3%">
                    @foreach ($categories as $category)
                       <optgroup label="{{ $category->nome }}">
                            @foreach ($subCategories as $subCategory)
                                @if($subCategory->categoria == $category->codCategoria)
                                <option value="{{ $subCategory->codSottocategoria }}"> {{ $subCategory->nome}}</option>
                                @endif
                            @endforeach
                        </optgroup>                        
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-default" style="margin-bottom: 5%;">Crea Prodotto</button>
        </form>
    </div><!--/sign up form-->

@endsection