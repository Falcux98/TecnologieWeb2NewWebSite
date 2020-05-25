@extends('layouts\public')

@section('title', 'Catalog')
@section('content')
	
	
	<div class="left-sidebar">
		<h2>Categorie</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->

			@isset($categories)
			@foreach ($categories as $category)
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
							<span class="badge pull-right"><i class="fa fa-plus"></i></span>
							{{ $category->nome}}
						</a>
					</h4>
				</div>
				<div id="sportswear" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							@isset($subCategories)
							@foreach ($subCategories as $subCategory)
							    @if ($subCategory->categoria == $category->codCategoria)
								<li><a href="#">{{ $subCategory->nome}} </a></li>
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
    
@endsection


