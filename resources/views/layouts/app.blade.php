<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Favicon == Icono --}}
    <link href="/IMG/favicon.ico" rel="icon" type="image/x-icon" />
    <title>Emergencias Chile</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                <a href="{{ route('principal') }}" class="w3-bar-item w3-button">Chile Emergencias</a>
                <div class="w3-hide-small">
                    <a href="#home" class="w3-bar-item w3-button">Catastrofes</a>
                    <a href="#contact" class="w3-bar-item w3-button"></a>
                    <div class="w3-right w3-hide-small">
                    @guest
                        <a href="#about" class="w3-bar-item w3-button">Mis Medidas</a>
                        <a href="{{ route('login') }} " class="w3-bar-item w3-button">Entrar</a>
                        <a href="{{ route('register') }}" class="w3-bar-item w3-button">Registrarte</a>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
