@extends('layouts.app')
@section('content')

<div class="container mt-3">
	
	<a class="display-4">Bienvenido</a>
	<p class="ml-5 mt-3">Seleccione para ingresar al menu correspondiente</p>
	<div class="row">
			
		<div class="offset-md-4 col-md-4 mt-5">
				<a href="twitter" class="btn btn-info btn-block mb-3" role="button">
					Twitter
				</a>
				<a href="{{ route('users.index') }} " class="btn btn-info btn-block mb-3" role="button">
					Usuarios
				</a>
				<a href="" class="btn btn-info btn-block mb-3" role="button">
					Catastrofes
				</a>
				<a href="" class="btn btn-info btn-block mb-3" role="button">
					Medidas
				</a>
				<a href="" class="btn btn-info btn-block mb-3" role="button">
					Organizaciones
				</a>
				<a href="" class="btn btn-info btn-block mb-3" role="button">
					Panel de Historial
				</a>
				
		</div>
	</div>
</div>


@stop
