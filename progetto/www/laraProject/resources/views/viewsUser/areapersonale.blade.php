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

                    <h2>{{ Auth::user()->username }}</strong></h2>
                    <div id="gmap" class="contact-map">
                        @isset($users)
                        @foreach($user as $users)
                        @include('helpers.areapersonaleImg' , ['attrs' => 'imagefrm', 'imgFile' =>$users ->foto])
                        @endforeach
                        @endisset()
                        <h4>
                        <li>Nome:  {{ Auth::user()->nome }}</li>
                        <li>Cognome:  {{ Auth::user()->cognome }}</li>
                        <li>Data Di nascita: {{ Auth::user()->dataNascita }}</li>
                        <li>Residenza: {{ Auth::user()->residenza }}</li>
                        <li>Occupazione: {{ Auth::user()->occupazione }}</li>
                        </h4>

					</div>
				</div>
            </div>
        </div>
    </div>
    </section>
</div>

@endsection

