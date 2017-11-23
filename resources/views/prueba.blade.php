
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - onChange event using ajax dropdown list</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">





      {{  Form::open([route'=>'login.form', 'method' => 'post')] }}


        

        <div class="form-group">
          <label>Select Country:</label>
          {!! Form::select('region_id',[''=>'--- Selecciona Region ---']+$regiones,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          <label>Select State:</label>
          {!! Form::select('comuna_id',[''=>'--- Selecciona Comuna ---'],null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::submit('Contact Us!', 
          array('class'=>'btn btn-primary')) !!}
        </div>

      {!! Form::close() !!}
    

    </div>
  </div>


</div>

<script type="text/javascript">
  $("select[name='region_id']").change(function(){
      var region_id = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo route('select-ajax') ?>",
          method: 'POST',
          data: {region_id:region_id, _token:token},
          success: function(data) {
            $("select[name='comuna_id'").html('');
            $("select[name='comuna_id'").html(data.options);
          }
      });
  });
</script>

</body>

</html>
