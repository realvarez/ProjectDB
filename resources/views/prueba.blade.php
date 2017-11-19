@extends('layouts.app')
@section('content')

<section class="container mt-5">
	<div class="data-grid">
        <table class="responsive">
        	<thread>
            	<tr>
                	<th>ID</th>
                	<th>Nombre</th>
                	<th>Email</th>
            	</tr>
            </thread>

             @foreach ($u as $usuario)
             <body>
		         <tr>
		            <td>{{$usuario->id}} </td>
		            <td>{{$usuario->nombre}}</td>
		            <td>{{$usuario->email}}</td>
		         </tr>
		     </body>
             @endforeach
        </table>
    </div>
</section>


@endsection
