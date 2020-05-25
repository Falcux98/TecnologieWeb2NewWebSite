@extends('layouts\public')

@section('title', 'Catalog')
@section('content')
	
	<!-- Sezione CATEGORIE E SOTTOCATEGORIE laterale -->
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

			<div class="price-range"><!--price-range-->
				<h2>Prezzo</h2>
				<div class="well">
					 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
					 <b>€ 0</b> <b class="pull-right">€ 1600</b>
				</div>
			</div><!--/price-range-->
			
		</div>	
	</div>

    
@endsection

