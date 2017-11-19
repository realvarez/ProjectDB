@extends('layouts.app')
@section('content')

<section class="container mt-5">
  <div class="row">
    <div class="col">
      <div class="form-area">
        <form role="form" action="">
        <br style="clear:both">
            <h3 style="margin-bottom: 25px; text-align: center;">Crear Catastrofe</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Titulo" required>
					</div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
              @foreach($comunas as $com)
              <option>{{$com->nombre}}</option>
              @endforeach
            </select>
          </div>

                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message"  rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                    </div>

        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Crear</button>
        </form>

    </div>
    </div>
  </div>
  <a href="/catastrofes" class="btn-primary">Volver</a>

</section>
