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


@section('title', 'Chi Siamo')
@section('content')
 <div id="contact-page" >
    	<div class="bg">
	    	  		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Chi <strong>Siamo</strong></h2>    			    				    				
					<div id="gmap" class="contact-map" style="font-size:18px">
                                            <img src="images/home/light23113.jpg" style="height: 240px; width: 375px; float:left; margin: 18px">
                                            <hr>
                                            <p>TWeb è un sito di E-commerce che opera sul mercato dal 2008. Si propone come leader della rivendita di prodotti tecnologici e all'avanguardia.</p>
                                            <p>Grazie alla sua notevole organizzazione è in grado di rispondere alle richieste degli utenti in tempi ristretti e di evolversi di pari passo con le esigenze del mercato maturando significative esperienze nell'ambito dell'evoluzione tecnologica.</p>
                                            <p></p>
                                        </div>
                                        
                                        
				</div>			 		
			   
          	
           
	    		<div style="text-align: center">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contatti</h2>
	    				<address>
	    					<p>TecnologieWeb shop Inc.</p>
							<p>Via Brecce Bianche 12,  60131, AN</p>
							<p>Ancona IT</p>
							<p>Mobile: +39 95 01 88 821</p>
							<p>Fax: 0000000</p>
							<p>Email: tecnologieweb@univpm.it</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a target="blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<li><a target="blank" href="https://twitter.com/explore"><i class="fa fa-twitter"></i></a>
								</li>
								
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	   
    	</div>	
    </div>
@endsection


