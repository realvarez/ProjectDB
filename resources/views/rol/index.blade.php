@extends('layouts.admin')
@section('content')
<div class="col-md-8 ml-5 center mt-5">
	<h2 >Administracion Roles del Sistema</h2>
	<div class="card mb-5">
      <div class="card-block p-0">
        <table class="table table-bordered table-sm m-0">
          <thead class="">
            <tr>
                <th>#</th>
                <th>Rol</th>
                {{-- <th>Acciones</th> --}}
            </tr>
          </thead>
          <tbody>
          	@foreach($roles as $item)
              <tr>
              		<td>{{ $item->id }}</td>
                  <td>{{ $item->nombre }}</td>
              </tr>
             @endforeach
          </tbody>
        </table>

      </div>
    </div>
        <a href="{{ route('rol.index') }}" class="offset-8 col-md-2 btn btn-outline-primary btn-sm disabled" role="button">Crear</a>
  </div>
@stop
