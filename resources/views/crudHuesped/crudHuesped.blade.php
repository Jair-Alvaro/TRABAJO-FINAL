@extends('layouts.app')
@section('content')
<br><br><br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
	  <th scope="col">Telefeno</th>
	  <th scope="col">Dirección</th>
	  <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
	@foreach($customers as $customer)
    <tr>
      <td>{{$loop->iteration}}</td>
	  <td>{{$customer->nombres}}</td>
	  <td>{{$customer->apellidos}}</td>
	  <td>{{$customer->dni}}</td>
	  <td>{{$customer->telefono}}</td>
	  <td>{{$customer->direccion}}</td>
	  <td>
	<div class="btn-group">	
	 <a  id='editar'  type="submit" class="btn btn-sm btn-outline-secondary" href="{{ url('/editarHuesped/'.$customer->id.'/editarHuesped') }}">
		Editar
	  </a>
	  <form method="POST" action="{{url('/eliminarHuesped/'.$customer->id) }}">
	    @csrf
        @method('DELETE')
		<button type="submit" class="btn btn-sm btn-outline-secondary" id="eliminar"  onclick="return confirm('Desea Eliminar Huesped?');">Eliminar</button>
	  </form>
	</div>  
	  </td>
    </tr> 
	@endforeach  
  </tbody>
</table>
{{$customers->links()}}

@endsection