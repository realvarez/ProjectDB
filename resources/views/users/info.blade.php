@extends('layouts.app')
@section('content')
<section class="container-fluid">

  <div class="row d-flax justify-content-center">
  <div class="col-md-5 border bg-light border-primary">
      <h3>Usuario : {{$usuario->nombre}} {{$usuario->apellido}} </h3>
      <h4>Email: </h4> {{$usuario->email}}
      <h4>Direccion</h4>{{$usuario->direccion}}
      <h4>Comuna:</h4>{{$usuario->comuna->nombre}}
      <h4>Region:</h4>{{$usuario->comuna->region->nombre}}
      <h4>Rol:</h4>{{$usuario->rol->nombre}}

      <div class="d-flex justify-content-around mb-2">
        <a class="color2 btn btn-primary" href="{{route('users.update',$usuario->id)}}">Editar</a>
        <a class="color2 btn btn-primary" href="#">Hitorial</a>


      </div>

  </div>
  </div>

</section>
@stop
