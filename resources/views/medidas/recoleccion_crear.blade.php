@extends('layouts.app')
@section('content')


<section class="container mt-5">
  <div class="row">
    <div class="col">
      <div class="form-area">
        <form role="form" method="POST" action="{{route('recoleccion.store')}}">
          {{ csrf_field() }}
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Crear Medida Recoleccion</h3>
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="Titulo" placeholder="Descripcion" required>
          </div>
          <div class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="Descripcion" placeholder="Descripcion" required>
          </div>


          <div class="form-group">
            <label for="exampleFormControlSelect1">Region</label>
            <input type="text" class="form-control" id="" name="Region" placeholder="Indique la region " required>

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Comuna</label>
            <input type="text" class="form-control" id="" name="Comuna" placeholder="Indique la Comuna " required>

          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Direccion</label>
            <input type="text" class="form-control" id="dir" name="Direccion" placeholder="Indique la Direccion " required>
          </div>

          <h3 style="margin-bottom: 25px; text-align: center;">Elementos a recolectar</h3>
          <div class="form-group">
            <!-- <table class="table">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Elemento</th>
                    <th scope="col">cantidad</th>

                  </tr>
                </thead>
                <tbody id='formc'>
                <tr>
                  <th scope="row">1</th>
                  <td><input type="text" class="form-control" id="dir" name="elemento"  required></td>
                  <td><input type="number" class="form-control" id="dir" name="cantidad"  required></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td><input type="text" class="form-control" id="dir" name="elemento"  required></td>
                  <td><input type="number" class="form-control" id="dir" name="cantidad"  required></td>
                </tr>
              </tbody>
            </table> -->
              <div class="form-group fieldGroup">
                  <div class="input-group">
                    <input type="text" name="elemento" class="form-control" placeholder="Ingrese el nombre del elemento"/>
                    <input type="number" name="cantidad" class="form-control" placeholder="Ingresar cantidad requerida"/>
                      <div class="input-group-addon">
                          <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                      </div>
                  </div>
              </div>
              <div class="form-group fieldGroupCopy" style="display: none;" >
              <div class="input-group">
                  <input type="text" name="elemento" class="form-control" placeholder="Ingrese el nombre del elemento"/>
                  <input type="number" name="cantidad" class="form-control" placeholder="Ingresar cantidad requeridal"/>
                  <div class="input-group-addon">
                      <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                  </div>
              </div>
          </div>

              <button type="button" id="dinamico" name="submit" class="btn btn-success">agregar</button>
          </div>


          <button type="submit" id="submit" name="submit" class="btn btn-success">Enviar</button>

        </form>

      </div>
    </div>
  </div>







  <a href="/catastrofes" class="btn-primary">Volver</a>


</section>
