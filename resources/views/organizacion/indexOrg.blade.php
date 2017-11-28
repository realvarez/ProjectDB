@extends('layouts.app')
@section('content')
<div class="container">
	<div class="text-center mb-5">
		<h1 class="display-4 ">Organizaciones Participantes</h1> 
	</div>
	<div class="row">
	@foreach ($organizacion as $item)
		<div class="col-sm-4 mb-5 ">
			<div class="card" style="width: 20rem;">
		  	<img class="card-img-top" src="/storage/{{$item->logo}}" alt="Card image">
		  	<div class="card-body">
		    	<h4 class="card-title"> {{ $item->nombre }} </h4>
		    	<p class="card-text text-truncate"> {{ $item->descripcion }}</p>
		    	<a href="{{ route('organizaciones.show',$item->id) }}" class="btn btn-primary">Entrar</a>
		  	</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
@stop