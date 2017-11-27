@extends('layouts.admin')
@section('content')
<div class="container col-md-8 mt-5">
	<h2 >Administracion Usuarios</h2>
	<div class="card mb-5 mt-3">
      <div class="card-block p-0">
          <table class="table table-bordered table-sm m-0">
              <thead class="">
                  <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Estado</th>
                      <th>Accion</th>
                  </tr>
              </thead>
              <tbody>
              	@foreach($user as $item)
                  <tr>
                  		<td>{{ $item->id }}</td>
                      <td>{{ $item->nombre }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->estado}}</td>
                      <td class="text-center">
                      	<a href="{{route('users.show',$item->id)}}" class="btn btn-primary btn-sm" role="button">Ver</a>
                      	<a href="{{route('users.destroy',$item->id)}}" class="btn btn-danger btn-sm" role="button">Eliminar</a>
                      </td>
                  </tr>
                 @endforeach
              </tbody>
          </table>
      </div>
  </div>
	
</div>



@stop
