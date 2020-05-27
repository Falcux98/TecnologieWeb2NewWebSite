<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css\animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\main.css') }}">
    <link rel="stylesheet" href="{{ asset('css\prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('css\price-range.css') }}">
    <link rel="stylesheet" href="{{ asset('css\price-range.css') }}">
    <link rel="stylesheet" href="{{ asset('css\responsive.css') }}">
    <title>TecWeb | @yield('title', 'Home')</title>
</head>
<body>

    <header id="header">
        @include('layouts._navadmin')
    </header>

	<section>
    <div class="container">
		<div class="row">
            @yield ('content')
            <div id="contact-page" class="container">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title text-center">Benvenuto <strong>Amministratore</strong></h2>
                            <div id="gmap" class="contact-map">
                                <p>Entra nell'area amministratore per gestire lo staff.</p>
                                <p>Puoi inserire nuovo personale o eventualmente cancellarlo.</p>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
	</div>
</section>




    	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">

					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Termini di servizio</a></li>
								<li><a href="{{ route('Privacy Policy') }}">Privacy Policy</a></li>
							</ul>
						</div>
					</div>


				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 Tecnologie WEB | All rights reserved.</p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->

	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquey.prettyPhoto.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/price-range.js') }}"></script>
</body>
</html>
