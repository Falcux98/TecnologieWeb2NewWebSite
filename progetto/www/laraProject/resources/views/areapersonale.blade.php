@extends('layouts.public')

@section('title', 'Area Personale')
@section('content')
<div>
    <section>

    <div id="contact-page" class="container">
    	<div class="bg">          
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Area <strong>Personale</strong></h2>    			    				    				
                    <div class="col-sm-4">
                        <img src="images/areapersonale/areapersonale.png" class="store img-responsive" alt="" />
                    </div>
                    <div id="gmap" class="contact-map">
                        <a>
                            <p>Nome: </p>
                            <p>Cognome: </p>
                            <p>Data Di nascita: </p>
                            <p>Residenza: </p>
                            <p>Occupazione: </p>
                            <p>Username: </p>
                            
                        </a>
					</div>
				</div>			 		
            </div>  
        </div>    
    </div>  	
    </section>       
</div>

@endsection

