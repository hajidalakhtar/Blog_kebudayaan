<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="token" id="token" value="{{ csrf_token() }}"> --}}


    <title>Budaya Indonesia</title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Comfortaa" rel="stylesheet">
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .navbutton{
        margin-top:-28px;
        margin-bottom:-28px;
        padding-top: 16px;
        border-left:1px solid #dbdbdb;
        
    }
    .navbutton:hover{
        background-color:#af8b62;
    }
    .borderkanan{
    border-right:1px solid #dbdbdb;
  

    }
 
    .context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}
.hover1:hover{
    opacity: 1;
}
.
  @media only screen and (max-width: 750px) {
 .navbutton{
       margin-top:0;
        margin-bottom:0;
        border-left:0px solid black;
    }
     .borderkanan{
    border-right:0px solid black;
    }
 
}
</style>
<body style="font-family: 'Comfortaa', cursive;">
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel  " style="z-index: 1000 ;box-shadow:1px 1px 50px black;background-color:#ceae8a">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}" style="font-family: 'Anton', sans-serif;">
                    BudayaIndonesia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-5 ">
                        <a href="" class="text-white pl-2 pr-2 navbutton text-white" style="text-decoration: none"><b>Arikel Budaya</b> </a> 
                        <a href="" class="text-white pl-2 pr-2 navbutton text-white" style="text-decoration: none"> <b> Tokoh Indonesia</b></a>  
                        <a href="" class="text-white pl-2 pr-2 navbutton text-white" style="text-decoration: none"><b> Makanan Indonesia</b></a> 
                        <a href="" class="text-white pl-2 pr-2 navbutton text-white borderkanan" style="text-decoration: none; "><b> Galeri</b></a>
                    </ul>
                    <ul class="navbar-nav ml-auto ">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 ">
            @yield('content')
        </main>
<br>

<footer class="section footer-classic context-dark bg-image pt-5 mt-5" style="background: #ceae8a;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>Budaya atau kebudayaan berasal dari bahasa Sanskerta yaitu buddhayah, yang merupakan bentuk jamak dari buddhi diartikan sebagai hal-hal yang berkaitan dengan budi, dan akal manusia.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Hajidalakhtar</span><span>. </span><span>Edutech 2019</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>Pekapuran Cimanggis Depok</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">hajidalakhtar@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">+62 822222022</a> 
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">Artikel Budaya</a></li>
                <li><a href="#">Tokoh Indonesia</a></li>
                <li><a href="#">Makanan Indonesia</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">API</a></li>
              </ul>
            </div>
          </div>
        </div>

      </footer>
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    @yield('script')
</script>
</html>
