@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center pt-5 mt-5 m-1">
 <div class="col-md-8 col-sm-8 col-xl-4 col-lg-5 formulario">
    <form action="{{url('/guardarEditarReserva/'.$reserva->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
       <div class="form-group text-center pt-3">
        <h1 class="text-light">Editar Reserva</h1>
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "dni" value="{{$reserva->dni}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "cantidad" value="{{$reserva->cantidad}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "monto" value="{{$reserva->monto}}">
        </div><br>
        <div class="form-group mx-sm-4 pb-3">
         <input type="text" class="form-control" name= "inicio" value="{{$reserva->fecha_inicio}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "final" value="{{$reserva->fecha_fin}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "dias" value="{{$reserva->n_dias}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "total" value="{{$reserva->precio_tot}}">
        </div><br>
        <input  type="submit" id="Geditar" class="btn btn-sm btn-outline-secondary" value="Editar">
      </form>
 </div>
</div>
</div>
@endsection