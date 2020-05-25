@extends('layouts\public')

@section('title', 'Catalog')
@section('content')
<div>
    @isset($prods)
    @foreach ( $prods as $product)
     <div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorie</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Computer
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Desktop </a></li>
											<li><a href="#">Laptop </a></li>
											<li><a href="#">2 in 1 </a></li>										
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Smartphone
											&Tablet
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Apple</a></li>
											<li><a href="#">Samsung</a></li>
											<li><a href="#">Huawei</a></li>
											<li><a href="#">Xiaomi</a></li>											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Accessori
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Archiviazione</a></li>
											<li><a href="#">Input</a></li>
										</ul>
									</div>
								</div>
							</div>							
						</div><!--/category-products-->
					
						
						<div class="price-range"><!--price-range-->
							<h2>Prezzo</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>€ 0</b> <b class="pull-right">€ 1600</b>
							</div>
						</div><!--/price-range-->
						
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Caratteristiche Articoli</h2>
						<div class="col-sm-6">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>20€</h2>
											<p>ThinkPad X1 Carbon</p>
											<a href="prodotti.html" class="btn btn-default add-to-cart"></i>Visualizza prodotto</a>
										</div>
	
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product7.jpg" alt="" />
										<h2>500€</h2>
										<p>Xiaomi 9T</p>
										<a href="prodotti.html" class="btn btn-default add-to-cart"></i>Visualizza prodotto</a>
									</div>
								</div>
							</div>
						</div>
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
    </div>
    @endforeach
    @endisset   
</div>
    
@endsection


