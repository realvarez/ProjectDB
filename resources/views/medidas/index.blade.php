@extends('layouts.app')
@section('content')



@foreach($medida as $m)
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	{{$m->descripcion}}
	<br>

@endforeach
@stop