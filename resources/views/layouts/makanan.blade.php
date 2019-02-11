<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="token" id="token" value="{{ csrf_token() }}"> --}}

    <link rel="shortcut icon" type="image/png" href="storage/favicon.png"/>

    <title>Makanan Indonesia</title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Comfortaa" rel="stylesheet">
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
      .navbutton:hover{
        margin-top: -7px;
        border-bottom: 2px solid white;
        transition: 0.05s;
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

  @media only screen and (max-width: 750px) {
   
 .navbutton{
     padding-top: 5px;
     padding-bottom: 5px;
     margin-left: -50px;
    }
      .navbutton:hover{
          margin-top: 0px;
        background-color:#af8b62;
         border-bottom: none;
    }
 
   
 
}
</style>
<body style="font-family: 'Comfortaa', cursive;">
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel sticky-top  " style="z-index: 1000 ;background-color:#ceae8a">
            <div class="container">
               <div class="iconPreview no-attribution" style="background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTIwMCIgaGVpZ2h0PSIxMjAwIiB2aWV3Qm94PSIwIDAgMTIwMCAxMjAwIj48Zz48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2MDAgNjAwKSBzY2FsZSgwLjY5IDAuNjkpIHJvdGF0ZSgwKSB0cmFuc2xhdGUoLTYwMCAtNjAwKSIgc3R5bGU9ImZpbGw6I0ZGRkZGRiI+PHN2ZyBmaWxsPSIjRkZGRkZGIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6I0ZGRkZGRjt9Cjwvc3R5bGU+PHBhdGggY2xhc3M9InN0MCIgZD0iTTI1Nyw0My4zYy0xMS45LTU2LTU1LjEsMTMuNC0xMzAsMzUuOUM0OS44LDEwMi41LTguMyw0OC42LDkuNiwxMTMuMSAgQzQ3LjUsMjQ5LDEzNi4zLDMyOC44LDE5Ny40LDMwOS4yYzQuOC0xLjUsMTgtNC40LDIyLjUtNi41YzMuOC0zMi4xLDExLjItNjYuOSwyNS40LTEwMi44YzExLjUtMjkuMSwyMC42LTI3LjYsMzQuOC0xNC44ICBDMjgxLjYsMTQ4LjUsMjY5LjYsMTAyLjgsMjU3LDQzLjN6IE05NSwxNTguOWMtMTkuMSwyLjYtMzMuNCwxNy45LTM0LDEzLjljLTAuNi00LjEsMTIuOC0yNS45LDMyLTI4LjZjMTkuMS0yLjYsMzYuOCwxNSwzNy40LDE5ICBDMTMwLjksMTY3LjMsMTE0LjEsMTU2LjMsOTUsMTU4Ljl6IE0xODcuMSwyNDguN2MtMjMuOCw3LjQtNTUtOS01Ny45LTE4LjNzMjMuNi00LjgsNDcuNS0xMi4yczQ1LjUtMjUuOSw0OC40LTE2LjYgIEMyMjcuOSwyMTAuOSwyMTAuOSwyNDEuMywxODcuMSwyNDguN3ogTTIwNi4zLDEyNi4xYy0xNy40LDguMy0yNi40LDI3LjItMjguMiwyMy41Yy0xLjgtMy43LDQuNC0yOC42LDIxLjgtMzYuOXMzOS42LDMuMSw0MS40LDYuOCAgQzI0MywxMjMuMiwyMjMuNywxMTcuOCwyMDYuMywxMjYuMXoiPjwvcGF0aD48cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzc1LjYsMjY2LjNjLTc1LjYtMjcuOS04OS41LTEwNi0xMTQtNDMuN2MtNTEuNywxMzEuMy0yOC45LDI0OC41LDMxLjYsMjY5LjcgIGM2MC41LDIxLjIsMTI4LTUuNywyMDcuOC0xNzYuM0M1MjUuMywyNjQuMSw0NDksMjkzLjQsMzc1LjYsMjY2LjN6IE0yNjkuMywyOTQuMWMwLjktNCwxMy45LDEyLjQsMzIuNywxNi43ICBjMTguOSw0LjIsMzYuNS01LjQsMzUuNi0xLjRjLTAuOSw0LTE5LjksMjAuMS0zOC44LDE1LjlDMjc5LjksMzIxLDI2OC40LDI5OC4xLDI2OS4zLDI5NC4xeiBNMzYzLjQsNDQ2LjMgIGMtMy42LDktMjMuNy0xMS4yLTQ2LjgtMjAuNWMtMjMuMS05LjMtNDkuOS03LjEtNDYuMy0xNi4xYzMuNi05LDM2LTIyLjcsNTkuMi0xMy40QzM1Mi42LDQwNS41LDM2Nyw0MzcuMiwzNjMuNCw0NDYuM3ogICBNNDQ0LjYsMzYyLjJjLTIuMSwzLjUtMjUuMSwxMy4xLTQxLjgsMy40Yy0xNi43LTkuNy0yMC43LTM1LjEtMTguNy0zOC42YzIuMS0zLjUsOS40LDE2LjEsMjYuMSwyNS44ICBDNDI2LjksMzYyLjUsNDQ2LjYsMzU4LjYsNDQ0LjYsMzYyLjJ6Ij48L3BhdGg+PC9zdmc+PC9nPjwvZz48L3N2Zz4=);"></div>
                <a class="navbar-brand text-white" href="{{ url('/makanan') }}" style="font-family: 'Anton', sans-serif;">
                  <img src="https://pngimage.net/wp-content/uploads/2018/06/nasi-uduk-png.png" alt="" width="40px;" class="mr-2"> 
                   MakananIndonesia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-5  ">
                        <div class="navbutton">
                        <a href="/home" class="text-white pl-2 pr-2  text-white" style="text-decoration: none"><b>Arikel Budaya</b> </a> 
                        </div >
                        <div class="navbutton">
                        <a href="{{route('tokoh.home')}}" class="text-white pl-2 pr-2  text-white" style="text-decoration: none"> <b> Tokoh Indonesia</b></a>  
                        </div>
                        <div class="navbutton">
                        <a href="{{route('makanan.home')}}" class="text-white pl-2 pr-2  text-white borderkanan" style="text-decoration: none"><b> Makanan Indonesia</b></a> 
                        </div>
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

        <main class="">
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
                <li><a href="/home">Artikel Budaya</a></li>
              <li><a href="{{route('tokoh.home')}}">Tokoh Indonesia</a></li>
              <li><a href="{{route('makanan.home')}}">Makanan Indonesia</a></li>
              <li><a href="/api">API</a></li>
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
