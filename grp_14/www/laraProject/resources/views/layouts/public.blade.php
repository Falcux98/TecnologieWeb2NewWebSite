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
        @include('layouts\_navpublic')
    </header>
    
    <div>
        @yield ('content')
    </div>
    
    
    
    
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
</body>
</html>