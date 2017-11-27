@extends('layouts.admin')
@section('content')
<div class="col-md-8 ml-5 center mt-5">
	<h2>Administracion Catastrofes del Sistema</h2>
	<div class="card mb-5 mt-3">
      <div class="card-block p-0">
        <table class="table table-bordered table-sm m-0">
          <thead class="">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Region</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($catastroves as $item)
              <tr>	
              		<td>{{ $item->id }}</td>
                  <td>{{ $item->titulo }}</td>
                  <td>{{ $item->tipo_catastrove->tipo }}</td>
                  <td>{{ $item->comuna->region->nombre}}</td>
                  @if($item->activa == 1)
                    <td>Activa</td>
                  @else
                    <td>Desactiva</td>
                  @endif
                  <td class="text-center">
                  	<a href="{{route('medidas.busqueda',$item->id)}}"  class="btn btn-primary btn-sm" role="button">Ver</a>
                  	<a method='DELETE' href="{{route('catastrofes.destroy',$item->id)}}"  class="btn btn-danger btn-sm" role="button">Eliminar</a>
										<a href="{{route('catastrofes.edit',$item->id)}}"  class="btn btn-warning btn-sm" role="button">Editar</a>
                  </td>
              </tr>
             @endforeach
          </tbody>
        </table>

      </div>
    </div>

		<a href="{{route('catastrofes.create')}}" class="offset-8  btn btn-outline-primary btn-sm" role="button">Ingresar Nueva Catastrofe</a>
  </div>
@stop
