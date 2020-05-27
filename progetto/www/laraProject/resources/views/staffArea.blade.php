@extends('layouts.staff')
@section('title', 'Area Staff')
@section('content')

    <div class="signup-form"><!--sign up form-->
        <h2>Nuovo Prodotto</h2>
        <form action="{{ route('StaffArea.store') }}" method="post">
            @csrf
            <input type="text" placeholder="Nome Prodotto"/>
            <input type="text" placeholder="Descrizione Breve"/>
            <input type="text" placeholder="Descrizione Estesa"/>
            <input type="number" placeholder="Prezzo"/>

            <label for="foto" style="margin-top: 3%;">Foto</label>
            <input id="foto" type="file" style="background:none;"/>

            <input type="number" min="0" placeholder="Percentuale sconto"/>

            <div>
                <label for="catId">Categoria</label>
                <select name="catId" id="catId" style="margin-bottom: 3%">
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