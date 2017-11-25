
<section class="container-fluid border border-primary p-3 mb-2 bg-light text-dark w-50">
  <div class="row">
    <div class="col-md-6 card row border border-primary">

    <div class="col-md-12">
      <h3>Recoleccion de Insumos</h3>
    </div>
    <div class="col-md-12">
      <h4>Descripcion:</h4>
      <p>{{$recoleccion->medida->descripcion}}</p>
    </div>
    <div class="col-md-12">
      <h4>Datos Eventos:</h4>
      <p>Region: Por ahora vacio</p>
      <p>Comuna:{{ $recoleccion->comuna_id}}</p>
      <p>Direccion:{{ $recoleccion->direccion}}</p>
      <p>Fecha Inicio:{{ $recoleccion->medida->fecha_inicio}}</p>
      <p>Fecha Termino:{{ $recoleccion->medida->fecha_termino}}</p>
    </div>

  </div>

  <div class="col-md-6 card border border-primary">
    <h3>Lista De Elementos</h3>
    <table class="table">
  <thead>
    <tr>

      <th scope="col">Elemento</th>
      <th scope="col">Cantidad Actual</th>
      <th scope="col">Cantidad Requerida</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recoleccion->aporte as $aporte)
    <tr>
      <th scope="row">{{$aporte->nombre}}</th>
      <td>{{$aporte->recolectado}}</td>
      <td>{{$aporte->requeridos}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>

</div>


</section>
