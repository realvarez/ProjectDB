@extends('layouts.admin')
@section('content')
<div class="col-md-8 mt-5 ml-5 center">
	<h2 class="alert-danger">Medidas Criticas</h2>
	<div class="card mb-5 mt-3">
      <div class="card-block p-0">
        <table class="table table-bordered table-sm m-0">
	        <thead class="">
	          <tr>
	            <th>Titulo</th>
	            <th>Categoria</th>
	            <th>Avance</th>
	          </tr>
          </thead>
          <tbody>
            @foreach($medidas as $item)
              <tr>
                <td>{{ $item->titulo }}</td>
                <td>
                @if($item->MorphMedida_type =='App\Recoleccion')
                  Rocoleccion
                @elseif($item->MorphMedida_type =='App\Apoyo_economico')
                  Apoyo Economico
                @elseif($item->MorphMedida_type =='App\Evento')
                  Evento A Beneficio
                @elseif($item->MorphMedida_type =='App\Voluntariado')
                  Voluntariado
                @endif
                </td>
                <td>
                  {{ $item->avance }}
                </td>                      
              </tr>
          	@endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop
