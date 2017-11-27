@extends('layouts.admin')
@section('content')
<div class="col-md-8 ml-5 center">
	<h1 class="display-4 text-center">Administracion Medidas del Sistema</h1>
	<div class="card mb-5">
      <div class="card-block p-0">
        <table class="table table-bordered table-sm m-0">
              <thead class="">
                  <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Administrador</th>
                      <th>Miembros</th>
                      <th>Accion</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($organizacion as $item)
                  <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->titulo }}</td>
                      <td>{{ $item->miembros->find('rol',4)->usuario->nombre}} </td>
                      <td class="text-center">
                        <a href="{{route('organizacion.show',$item->id)}}" class="btn btn-primary btn-sm" role="button">Ver Miembros</a>
                      </td>
                      <td>
                        <a href="{{route('organizacion.destroy',$item->id)}}" class="btn btn-danger btn-sm" role="button">Eliminar</a>
                      </td>
                  </tr>
                 @endforeach
              </tbody>
          </table>
      </div>
    </div>
  </div>
@stop
