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
@section('title', 'Home')
@section('content')
<div>
	@auth
		<h2 class="title text-center"> Area {{ Auth::user()->role }}</h2>
		<h3 class=" text-center"> Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }} </h3>
		<div class="container" style="width: 80%;">
			<p style="margin-bottom: 3%; text-align: center">  
				Accedi all'area 
				@if (Auth::user()->role == 'staff')
					Staff in alto a destra per poter aggiungere prodotti categorie e sottocategorie. Per modificare o rimuovere prodotti cerca nel catalogo
					il prodotto che vuoi modificare/rimuovere e segui le indicazioni	
				@elseif (Auth::user()->role == 'admin')	
					Amministarzione	in alto a destra per poter aggiungere, rimuovere o modificare i memebri dello staff, potrai inoltre
					rimuovere qualsiasi utente registrato nel sito. Buon Divertimento	
				@else
					Personale in alto a destra per consultare o modificare i tuoi dati personali. Consultando il catalogo potrai inoltre
					vedere tutti gli sconti e le promozioni sui nostri prodotti.
				@endif
	
			</p>
		</div>
		
	@endauth
</div>


	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>


						<!--Elementi slider-->
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Tecnologie</span>-WEB</h1>
									<h2>Elettronics Store Online</h2>
									<p>Acquista i tuoi prodotti preferiti scegliendo tra una vasta gamma di computer, laptop, smartphone, tablet...</p>
									<button type="button" class="btn btn-default get">Acquista ora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/store1.jpg" class="store img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Tecnologie</span>-WEB</h1>
									<h2>100% Certificati</h2>
									<p>I nostri prodotti sono sicuri e certificati, diffida dalle imitazioni. </p>
									<button type="button" class="btn btn-default get">Acquista ora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/store2.jpg" class="store img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>Tecnologie</span>-WEB</h1>
									<h2>Assistenza 7 giorni su 7</h2>
									<p>Solo da noi riceverai fin dal momento dell'acquisto un'assistenza dei nostri operatori che ti seguirà finchè ne avrai bisogno. </p>
									<button type="button" class="btn btn-default get">Acquista ora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/store3.png" class="store img-responsive" alt="" />
								</div>
							</div>

						</div>

						<a href= "#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>

			</div>
		</div>
            <hr>
	</section><!--/slider-->
</div>

 @endsection

