@extends('layouts.admin')
@section('content')
<div class="container col-md-8">
	<h1 class="display-4 text-center">Administracion Usuarios</h1>
	<div class="card mb-5">
    <div class="card-header"></div>
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
  
 	      <div class="card-footer p-0">
          <nav aria-label="...">
              <ul class="pagination justify-content-end mt-3 mr-3">
                  <li class="page-item disabled">
                      <span class="page-link">Previous</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active">
                      <span class="page-link">2<span class="sr-only">(current)</span>
                      </span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                  </li>
              </ul>
          </nav>
      </div>
  </div>
	
</div>



@stop
