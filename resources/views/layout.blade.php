<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Page title -->
    <title>Sunset Photostudio | @yield('title') </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 (css)-->
    <link rel="stylesheet" href="{{asset('metro4/css/metro-all.min.css')}}">

    <!-- My css stylesheets -->
    <link rel="stylesheet" href="{{asset('css/css/style.css')}}">

    <!-- Another stylesheets -->
    @yield('stylesheets')
  </head>
  <body>
    <header>
        <ul id="registration">
            @auth
                <li>
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                </li>
                <li><a id="btn-logout" href="#" onclick="return false;" 
                        class="button">{{Auth::user()->name}}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
            @endauth
        </ul>
        <br>
        <div data-role="appbar" class="mainMenu bg-white" data-expand-point="md">
            <a href="{{url('/')}}" class="brand no-hover">
                <img src="{{asset('img/Sunset.png')}}" id="main-img" alt="Starting image">
            </a>
            <ul class="app-bar-menu">
                <!-- Options when i'm log in -->       
                @auth
                    <li class="bg-white-hover">
                        <a href="#" class="dropdown-toggle">Fotografía</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="#">Todas las fotografías -</a></li>
                            <li><a href="{{url('/photographs/add')}}">Agregar fotografías -</a></li>
                        </ul>
                    </li>
                    <li class="bg-white-hover">
                        <a href="#" class="dropdown-toggle">Productos</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="{{url('/products')}}">Todos las productos -</a></li>
                            <li><a href="{{url('/products/add')}}">Agregar productos -</a></li>
                        </ul>
                    </li>
                    <li class="bg-white-hover"><a href="{{url('/users')}}">Usuarios</a></li>
                @else
                <!-- Options when i'm log out -->
                    <li class="bg-white-hover"><a href="{{url('/pictures')}}">Fotografía</a></li>
                    <li class="bg-white-hover"><a href="{{url('/products/sell')}}">Productos</a></li>
                    <li class="bg-white-hover"><a href="{{url('/contact')}}">Contactos</a></li>
                    <li class="bg-white-hover"><a href="{{url('/about')}}">Nosotros</a></li>
                <!-- Options when i'm log out -->
                @endauth
            </ul>
        </div>
    </header>

    <section id="document-body">
        @yield('body')
    </section>

    <!-- Document footer -->
    <footer class="text-center mt-8">
        <p>{{now()->format('Y')}}. Sunset PhotoStudio. Todos los derechos reservados</p>
        <p class="mt-2">
            <span class="mif-facebook mr-2"></span>
            <span class="mif-instagram mr-2"></span>
            <span class="mif-twitter mr-2"></span>
        </p>
    </footer>
    <!-- Metro 4 (js) -->
    <script src="{{asset('metro4/js/metro.min.js')}}"></script>
    @yield('scripts')
  </body>
</html>