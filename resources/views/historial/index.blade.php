@extends('layouts.admin')
@section('content')
<div class="col-md-8 ml-5 center mt-5">
	<h2>Historial de Acciones Sistema</h2>
	<div class="card mb-5">
    <div class="card-block p-0">
      <table class="table table-bordered table-sm m-0">
        <thead class="">
          <tr>
            <th>Accion</th>
            <th>Usuario</th>
            <th>Tabla</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach($historias as $item)
            <tr>
              <td>{{ $item->tipo_cambio }}</td>
              <td href="#">{{-- {{ $item->persona->nombre }} --}}aqui va el nombre</td>
              <td>{{ $item->tabla }}</td>
              <td>{{ $item->fecha_accion }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop