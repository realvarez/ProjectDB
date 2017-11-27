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
    <link href="https://fonts.googleapis.com/css?family=Asap:400,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sideBar.css') }}" rel="stylesheet">

    <title>Emergencias Chile</title>
    <!-- Styles -->

    <style>

    </style>
</head>
<body>
   
		<div class="container-fluid">
			<div class="row">
                <div class="col-sm-3">
                    <div class="nav-side-menu ml-0">
                        <div class="brand">Menu Administracion</div>
                        <div class="menu-list">
                            <ul id="menu-content" class="">
                                <li data-toggle="collapse" data-target="#User" class="collapsed">
                                    <a > Nombre{{-- {{ Auth::User()->nombre }} --}} <span class="arrow"></span></a>
                                </li>
                                <ul class="sub-menu collapse" id="User">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="/inicio">
                                            Salir de Modo Administracion
                                        </a>
                                    </li>
                                </ul>
  
                                <li>
                                    <a href="twitter">
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}">
                                        Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('catastrofes.index') }}">
                                        Catastrofes
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('medidas.index') }}">
                                        Medidas
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('organizaciones.index')}}">
                                        Organizaciones
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('rol.index') }}">
                                        Roles del Sistema
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('historial.index') }}">
                                        Panel de Historial
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
		</div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script language="javascript" type="text/javascript"></script>
    <script src="public/js/form_recoleccion.js" ></script>

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
