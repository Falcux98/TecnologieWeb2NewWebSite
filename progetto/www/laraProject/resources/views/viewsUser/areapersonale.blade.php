@extends('layoutsUser.user')

@section('title', 'Area Personale')
@section('content')
<div>
    <section>

    <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12">
					<h2 class="title text-center">Area <strong>Personale</strong></h2>

                    <h2><i class="fa fa-user">&ensp;</i>{{ Auth::user()->username }}</h2>
                    <div id="gmap" class="contact-map">
                        <h4>
                        <p>Nome:  {{ Auth::user()->nome }}</p>
                        <p>Cognome:  {{ Auth::user()->cognome }}</p>
                        <p>Data Di nascita: {{ Auth::user()->dataNascita }}</p>
                        <p>Residenza: {{ Auth::user()->residenza }}</p>
                        <p>Occupazione: {{ Auth::user()->occupazione }}</p>
                        </h4>
                        <a href="{{ route('showModificaUser', [Auth::user()->username]) }}" style="" class="btn btn-default add-to-cart">Modifica Profilo</a>
                    </div>
				</div>
            </div>
        </div>
    </div>
    </section>
</div>

@endsection

