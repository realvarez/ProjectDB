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
              <td>
                @if ($item->tipo_cambio == 1)
                  Delete
                @elseif($item->tipo_cambio == 2)
                  Create
                @elseif($item->tipo_cambio == 3)
                  Update
                @endif
              </td>
              <td href="#">{{ $item->persona->nombre }}</td>
              <td>{{ $item->tabla }}</td>
              <td>{{ $item->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop