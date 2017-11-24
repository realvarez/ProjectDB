@extends('layouts.app')
@section('content')

<section class="container mt-5">
	<div class="row align-items-center">

		<div class="col-6 mx-auto col-md-6 order-md-2">
			<img class="img-fluid mb-3 mb-md-0 rounded" src="/IMG/1943714.jpg" alt="" width="1024" height="860">
		</div>

		<div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
			<h1 class="mb-3 display-5 font-weight-bold">Chile Emergencias</h1>
			<p class="lead">Ayuda Informado</p>
			<p class="text-justify">Informate acerca de las ultimas catastrofes ocurrentes Chile y participa en las diferentes tipos de medidas paleativas de las Organizaciones participantes</p>
			
			<a href="{{ route('login') }}" class="btn btn-lg btn-block btn-outline-secondary mt-5" role="button">¡Ingresa Ahora!</a>
			<a href="{{ route('catastrofes.index') }}" class="btn btn-lg btn-block btn-outline-secondary mt-5" role="button">Revisa Donde Necesitan Ayuda </a>

		</div>
	</div>
</section>


@stop
   

