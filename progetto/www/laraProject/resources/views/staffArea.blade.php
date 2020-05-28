@extends('layouts.staff')
@section('title', 'Area Staff')
@section('content')

<div class="col-sm-9">
    <div class="signup-form"><!--sign up form-->
        <h1>Nuovo Prodotto</h1>
        <!--<form action="{{ route('StaffArea.store') }}" method="post" enctype="multipart/form-data">-->
            {{ Form::open(array('route' => 'StaffArea.store', 'file' => true, ))}}
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
            
            
           <label  for="inPromozione">In Sconto</label>
            <select class="input" name="inPromozione" id="inPromozione">
              <option value="1" {{ old('inPromozione') == 1 ? 'selected' : '' }}>Si</option>
               <option value="0" {{ old('inPromozione') == 0 ? 'selected' : '' }}>No</option>
              </select>
                
           
            <input type="number" min="0" placeholder="Percentuale sconto" name="percentualeSconto" value="{{ old('percentualeSconto') }}"/>
            @if($errors->first('percentualeSconto'))
            <ul>
                @foreach ($errors->get('percentualeSconto') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <div>
                <label for="sottocategoria">Categoria</label>
                <select name="sottocattegoria" id="sottocategoria" style="margin-bottom: 3%">
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
        </form>
    </div>
</div>

@endsection