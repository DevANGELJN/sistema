<link rel="stylesheet" href="{{asset('assets/css/inicio.css')}}">
@auth
        <a href="{{ url('/home') }}"></a>
    @else
        @if (Route::has('login'))
    {{-- Inicio de cabecera --}}
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid media-fluid">
        <a href="{{route('login')}}" class="navbar-brand">
          <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
          <dotlottie-player src="https://lottie.host/bc25b85f-1684-48a2-948c-0a678ebe72be/u5nUwAWhVP.json" background="transparent" speed=".6" style="width: 100px; height: 100px;" loop autoplay></dotlottie-player>
        </a> 
        <a href="{{route('login')}}" class="navbar-brand logo-max">safeDOC</a>               
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a href="#">
                  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
                  <dotlottie-player src="https://lottie.host/bc25b85f-1684-48a2-948c-0a678ebe72be/u5nUwAWhVP.json" background="transparent" speed=".6" style="width: 100px; height: 100px;" loop autoplay></dotlottie-player>  
                </a>
                <a href="" class="navbar-brand logo-media">safeDOC</a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body elements-media">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link nav-link-inicio mx-lg-2 {{request()->routeIs('login') ? 'active' : ''}}" aria-current="page" href="{{route('login')}}">Inicio</a>
                        
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-link-inicio mx-lg-2 {{request()->routeIs('register') ? 'active' : ''}}" aria-current="page" href="{{route('register')}}">Registrarse</a>
                    </li>                                      
                </ul>
            </div>
        </div>
        <a href="{{ route('login') }}" class="mx-lg-2 nav-button-lr">
          Empresa
        </a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="mx-lg-2 nav-button-lr">
          Registrarse
        </a>
        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation">
            <i class="bi bi-list navbar-toggler-icon" style="color: white"></i>
        </button>
      </div>
          @endif
    @endauth
    </nav>
    @endif
    {{-- Fin de cabecera --}}