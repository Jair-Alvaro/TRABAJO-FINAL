<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    body{
            background: linear-gradient(90deg, rgb(40, 41, 88) 0%, rgb(18, 74, 125) 32%, rgb(20, 106, 136) 52%, rgb(0, 104, 163) 94%);
            background-size: 300% 100%;
            animation: gradient 12s ease infinite;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    #app{
        background-color:rgb(33,37,41);
        /* background-color: rosybrown; */
        height: 130px;
    }
    .card {
            height: 52vh;
            width: 50vw;
            border-radius: 20px;
            padding: 1rem;
            transition: all 0.8s;
            background-color: rgb(33,37,41, 0.4);
            border: 1px solid white;
            backdrop-filter: blur(10px);
            color: whitesmoke;
    }
    .btn {
            width: 75%;
            height: 45px;
            border-radius: 55px;
            background: rgba(255, 255, 255, 0.137);
            color: white;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.4s ease-in-out;
        }
        #eliminar{
            width: 100%;
            color: red;
        }
        #editar,#registrar{
            color: yellow; 
            border-radius: 55px;
            width: 100%;
            height: 45px;
        }
        #Geditar{
            width: 400px;
        }
        #email,
        #password,
        #name,
        #password-confirm,
        #DNI,
        #Licencia,
        #Telefono {
            width: 100%;
            height: 30px;
            background-color: transparent;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 2px solid #CBCBCB;
            outline: none;
            margin-bottom: 1rem;
            color: white;
        }
</style>
<body id="cuerpo">
    <div id="app">
    <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ url('/home') }}" class="nav-link px-2 text-secondary">Inicio</a></li>
          <li><a  href="{{ url('/habitacion') }}" class="nav-link px-2 text-white">Habitaciones</a></li>
          <li><a href="{{ url('/huesped') }}" class="nav-link px-2 text-white">Huesped</a></li>
          <li><a href="{{ url('/nosotros') }}"class="nav-link px-2 text-white">Sobre nosotros</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reportes
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{ url('/crudHuesped') }}">Huespedes</a></li>
            <li><a class="dropdown-item" href="{{ url('/crudReserva') }}">Reservas</a></li>
          </ul>
        </li>
          
        </ul>
        <div class="text-end">
        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
          </div>   
      </div>
    </div>
  </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>


