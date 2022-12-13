@extends('layouts.app')
@section('content')
<br><br><br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dni-H</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Monto</th>
	  <th scope="col">Fecha-Inicio</th>
	  <th scope="col">Fecha-Final</th>
	  <th scope="col">#Dias</th>
      <th scope="col">Total</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
	@foreach($bookings as $booking)
    <tr>
      <td>{{$loop->iteration}}</td>
	  <td>{{$booking->dni}}</td>
	  <td>{{$booking->cantidad}}</td>
	  <td>{{$booking->monto}}</td>
	  <td>{{$booking->fecha_inicio}}</td>
	  <td>{{$booking->fecha_fin}}</td>
      <td>{{$booking->n_dias}}</td>
      <td>{{$booking->precio_tot}}</td>
	  <td>
	<div class="btn-group">	
	 <a  id='editar'  type="submit" class="btn btn-sm btn-outline-secondary" href="{{ url('/editarReserva/'.$booking->id.'/editarReserva') }}">
		Editar
	  </a>
	  <form method="POST" action="{{url('/eliminarReserva/'.$booking->id) }}">
	    @csrf
        @method('DELETE')
		<button type="submit" class="btn btn-sm btn-outline-secondary" id="eliminar"  onclick="return confirm('¿Desea Cancelar la Reserva?');">Cancelar</button>
	  </form>
	</div>  
	  </td>
    </tr> 
	@endforeach  
  </tbody>
</table>
@endsection