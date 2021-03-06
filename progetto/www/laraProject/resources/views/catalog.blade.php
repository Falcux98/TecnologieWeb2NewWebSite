@auth
@php
	if(Auth::user()->role == 'user') $mainNav = 'layoutsUser.user';
	else{
		$mainNav = (Auth::user()->role == 'staff') ? 'layoutsStaff.staff' : 'layoutsAdmin.admin';
	}
@endphp
@endauth

@guest
@php
	$mainNav = 'layouts.public';
@endphp
@endguest

@extends($mainNav)

@section('title', 'Catalogo')
@section('content')

	<!-- Sezione CATEGORIE E SOTTOCATEGORIE laterale -->
	<div class="col-sm-3">
	 <div class="left-sidebar">
		<h2>Categorie</h2>
		<div class="panel-group category-products" id="accordian">

			@isset($categories)
			@foreach ($categories as $category)

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#{{ str_replace(array(' ', '&') , '_',$category->nome) }}">
							<span class="badge pull-right"><i class="fa fa-plus"></i></span>
							{{ $category->nome}}
						</a>
					</h4>
				</div>
				<div id="{{ str_replace(array(' ', '&'), '_',$category->nome)  }}" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							@isset($subCategories)
							@foreach ($subCategories as $subCategory)
							    @if ($subCategory->categoria == $category->codCategoria)
								<li><a href="{{ route('subCategory', [$category->codCategoria, $subCategory->codSottocategoria]) }}">{{ $subCategory->nome}} </a></li>
							    @endif
							@endforeach
							@endisset
						</ul>
					</div>
				</div>
			</div>
			@endforeach
			@endisset
		</div>
	</div>
</div>

        <!--INIZIO CATALOGO-->

    <div class="col-sm-9 ">
    <h2 class="title text-center">Elenco prodotti</h2>

	<div class="features_items"><!--features_items-->
    @isset($prods)
     @foreach($prods as $products)
		  <div class="col-sm-6">
              <div class="product-image-wrapper">

				<div class="single-products">


				<div class="productinfo text-center">
				@include('helpers.productImg' , ['attrs' => 'imagefrm', 'imgFile' => $products->foto])

					<h2>Prodotto: {{$products->nome}}</h1>
                    <h4>@include('helpers.productPrice')</h4>
                    <p>Descrizione breve: {{$products->descrizioneBreve}}</p>
					<p>Descrizione estesa: {!!$products->descrizioneEstesa!!}</p>
					@auth
					@if (Auth::user()->role == 'staff')
					<a href="{{ route('removeElementConf', [$products->codProdotto]) }}" class="btn btn-default add-to-cart">Rimuovi Prodotto</a>
					<a href="{{ route('ModificaProdotto', [$products->codProdotto]) }}" class="btn btn-default add-to-cart">Modifica Prodotto</a>
					@endif

					@endauth
				</div>
            </div>
        </div>
	</div>

    @endforeach
    @endisset()
	</div>
     <!--paginazione-->
    @include ('pagination.paginator', ['paginator' => $prods])
	</div><!--FINE CATALOGO-->


@endsection


