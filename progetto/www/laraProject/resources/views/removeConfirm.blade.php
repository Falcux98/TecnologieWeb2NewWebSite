@extends('layouts.staff')

@section('title', 'Remove Element')
@section('content')
@isset($prod)
<form method="post" action="{{ route('removeElement', [$prod->codProdotto])}}">
    
        
        <h2>Eliminare {{ $prod->nome }} ?</h2>  
        <p>Questa procedura eliminerà definitivamente il prodotto dal catalogo, continuare?</p>  
        <button  type="submit" class="btn btn-default add-to-cart">Conferma</button>   
       
</form>
@endisset
@endsection