@extends('layouts.public')
@section('title', 'Home')
@section('content')
<div>
    @can('isAdmin')
    <li><a href="{{ route('admin') }}" class="highlight" title="Home Admin">Home Admin</a></li>
@endcan
@can('isUser')
    <li><a href="{{ route('user') }}" class="highlight" title="Home User">Home User</a></li>
@endcan

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

