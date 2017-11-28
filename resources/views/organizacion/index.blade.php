@extends('layouts.admin')
@section('content')
<div class="col-md-8 ml-5 center mt-5">
	<h2>Administracion Organizaciones Participantes</h2>
	<div class="card mb-5">
    <div class="card-block p-0">
      <table class="table table-bordered table-sm m-0">
        <thead class="">
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Miembros</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          @foreach($organizacion as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->nombre }}</td>
              <td class="text-center">
                 {{ $item->miembros->count() }}
              </td>
              <td class="text-center">
                <a href="{{route('organizaciones.show',$item->id)}}" class="btn btn-primary btn-sm" role="button">
                  Ver Miembros
                </a>
                <a href="{{route('organizaciones.destroy',$item->id)}}" class="btn btn-danger btn-sm" role="button">
                  Eliminar
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
    <a href="{{route('organizaciones.create')}}" class="offset-8 col-md-2 btn btn-primary btn-sm" role="button">Crear Organizacion</a>
  </div>
@stop
