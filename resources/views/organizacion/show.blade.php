@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<img class="img-fluid mx-auto " src="/storage/{{$organizacion->logo}}" alt="Logo Organizacion">
	</div>
	<p class="text-center display-2">{{$organizacion->nombre}}</p>
	<div class="text-justify ">
			<p>{{$organizacion->descripcion}} </p>
	</div>

<div class=" ml-5 col-md-11 center mt-5">
	<h2>Miembros Organizacion</h2>
	<div class="card mb-5">
    <div class="card-block p-0">
      <table class="table table-bordered table-sm m-0">
        <thead class="">
          <tr>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Fecha Inscripcion</th>
          </tr>
        </thead>
        <tbody>
          @foreach($miembros as $item)
            <tr>
              <td>{{ $usuarios->where('id',$item->user_id)->first()->nombre }}</td>
              <td>
              	@if ($item->rol == 4)
              		Administrador
              	@elseif($item->rol == 3)
              		Colaborador
              	@endif
              </td>
              <td class="text-center">
                {{$item->created_at}}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

	{{-- No funciona Participa --}}
			<form action="{{ route('organizaciones.participa',$organizacion->id) }}" method="POST" accept-charset="utf-8">
				{{csrf_field()}}
	<div class="row">
		@auth
			<button type="submit" id="submit" name="submit" class="btn btn-primary mr-5 ml-auto">Suscribirme</button>
			
			<a href=" {{ route('organizaciones.muestra') }}" class=" btn btn-danger" role="button" title="volver">Volver</a>
		@endauth
			</form>
		@guest
			<a href=" {{ route('organizaciones.muestra') }}" class="ml-auto col-md-1 btn btn-danger" role="button" title="volver">Volver</a>
		@endguest
	</div>
</div>
@stop