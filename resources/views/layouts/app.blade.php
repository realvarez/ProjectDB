<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    {{-- Jquery --}}

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Favicon == Icono --}}
    <link href="/IMG/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <title>Emergencias Chile</title>
    <!-- Styles -->
    <style>

    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light padding-top mb-5">

        <!-- Brand -->
        <a class="navbar-brand  p-0 m-0 mx-5" href="{{ route('principal') }}">Chile Emergencias</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
          <!-- Navbar links -->
        <div class="collapse navbar-collapse  p-0 m-0 " id="collapsibleNavbar">
            <div class="navbar-nav mr-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catastrofes.index') }}">Catastrofes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('medidas.index') }}" id="DropdownMedidas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medidas</a>
                    <div class="dropdown-menu" aria-labelledby="DropdownMedidas">
                        <a class="dropdown-item" href="#">Centros de Acopio</a>
                        <a class="dropdown-item" href="#">Voluntariados</a>
                        <a class="dropdown-item" href="#">Evento a Beneficio</a>
                        <a class="dropdown-item" href="#">Donaciones</a>
                    </div>
                </li>
            </div>
            <div class="navbar-nav text-center">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
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
    </nav>
    @yield('content')
    <footer class="mt-0 p-0">
        <div class="container mt-5 ">
            <div>
                <div class="copyright-box">
                    2017 Universidad de Santiago de Chile.
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->

    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script language="javascript" type="text/javascript"></script>
    <script type="text/javascript">
  $("select[name='region_id']").change(function(){
      var region_id = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo route('select-ajax') ?>",
          method: 'POST',
          data: {region_id:region_id, _token:token},
          success: function(data) {
            $("select[name='comuna_id'").html('');
            $("select[name='comuna_id'").html(data.options);
          }
      });
  });
</script>
</body>
</html>
