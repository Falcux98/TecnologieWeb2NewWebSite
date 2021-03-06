<div class="header_top"><!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fa fa-phone"></i> +39 95 01 88 821</a></li>
                        <li><a href=""><i class="fa fa-envelope"></i> tecnologieweb@univpm.it</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a target="blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="blank" href="https://twitter.com/explore"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header_top-->

<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{ route('Home') }}" title="Home"><img src="images/home/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        @guest
                        <li><a href="{{ route('loginregistrati') }}" title="Login Registrati"><i class="fa fa-lock"></i> Login | Registrati</a></li>
                        @endguest

                        @auth
                        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->

<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="{{ route('Home') }}" title="Home" class="{{ (Request::route()->getName() === 'Home') ? 'active': '' }}">HOME</a></li>
                        <li><a href="{{ route('Catalog') }}" title="Catalogo" class="{{ (Request::route()->getName() === 'Catalog') ? 'active': '' }}">CATALOGO</a></li>
                        <li><a href="{{ route('Dove Siamo') }}" title="Dove Siamo" class="{{ (Request::route()->getName() === 'Dove Siamo') ? 'active': '' }}">DOVE SIAMO</a></li>
                        <li><a href="{{ route('Chi Siamo') }}" title="Chi Siamo" class="{{ (Request::route()->getName() === 'Chi Siamo') ? 'active': '' }}">CHI SIAMO</a></li>
                    </ul>
                </div>
            </div>

            @if(Request::route()->getName() == 'subCategory' || Request::route()->getName() == 'Catalog' || Request::route()->getName() == 'search')
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    {{ Form::open(array('route' => 'search', 'method' => 'GET'))}}
                    {{ Form::text('cerca', Request::input('cerca'), ['id' => 'cerca'])}}
                    {{ Form::close()}}
                </div>
            </div>
            @endif

        </div>
    </div>
</div><!--/header-bottom-->
