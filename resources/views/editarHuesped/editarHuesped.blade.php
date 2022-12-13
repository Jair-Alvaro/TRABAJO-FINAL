@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center pt-5 mt-5 m-1">
 <div class="col-md-8 col-sm-8 col-xl-4 col-lg-5 formulario">
    <form action="{{url('/guardarEditarHuesped/'.$huesped->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
       <div class="form-group text-center pt-3">
        <h1 class="text-light">Editar Huesped</h1>
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "firstName" value="{{$huesped->nombres}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "lastName" value="{{$huesped->apellidos}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "dni" value="{{$huesped->dni}}">
        </div>
        <div class="form-group mx-sm-4 pt-3">
         <input type="text" class="form-control" name= "celular" value="{{$huesped->telefono}}">
        </div><br>
        <div class="form-group mx-sm-4 pb-3">
         <input type="text" class="form-control" name= "address" value="{{$huesped->direccion}}">
        </div>
        <input  type="submit" id="Geditar" class="btn btn-sm btn-outline-secondary" value="Editar">
      </form>
 </div>
</div>
</div>
@endsection