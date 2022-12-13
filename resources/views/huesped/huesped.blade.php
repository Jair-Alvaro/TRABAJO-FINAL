@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="es">

<style>
      body {
    background-image: url(https://www.kayak.com.hn/rimg/himg/78/57/65/ice-141079-68752728_3XL-736182.jpg?width=1366&height=768&crop=true);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100%;
    min-width: 900px;
}

.formulario {
    background: rgba(0, 0, 0, .5);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.568);
    color: black;
}

.form-control {
    background: rgba(0, 0, 0, .3);
    border-style: none;
    transition: 0.5s ease-in;
    outline: none;
    box-shadow: none;
}

.form-control:focus {
    background: none;
    box-shadow: none;
    outline: none;
}

.form-control::placeholder {
    color: white;
}

.ingresar {
    background: #222A3F;
    padding: 10px;
    font-size: 16px;
    font-weight: 700!important;
    color: white;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.568);
    transition: 0.5s ease-in;
}

.ingresar:hover {
    color: white;
}

.olvide {
    color: white;
    text-decoration-style: none;
    text-decoration-line: none;
}

.olvide:hover {
    color: white;
    text-decoration-style: none;
    text-decoration-line: none;
    cursor: pointer;
}

.olvide1 {
    color: white;
    text-decoration-style: none;
    text-decoration-line: none;
    font-size: 20px;
    font-weight: 700!important;
    padding: 10px;
    border-radius: 10px;
    background: rgba(0, 0, 0, .5);
}

.olvide1:hover {
    color: white;
    text-decoration-style: none;
    text-decoration-line: none;
    cursor: pointer;
}
.p-4{
        border-radius: 20px;
        padding: 1rem;
        transition: all 0.8s;
        background-color: rgb(33,37,41, 0.1);
        border: 1px solid white;
        backdrop-filter: blur(10px);
        color: whitesmoke;
    }

</style>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-8 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form class="p-4" method="POST" action="{{ route('registrarHuesped') }}">
                @csrf
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">Registro Huesped</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" style="color:#1EFF05" name= "firstName" placeholder="Ingrese el nombre" required>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" style="color:#1EFF05" name= "lastName" placeholder="Ingrese el apellido" required>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" style="color:#1EFF05" name= "dni" placeholder="Ingrese el numero de DNI" required>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" style="color:#1EFF05" name= "celular" placeholder="Ingrese el el número de telefono" required>
                    </div><br>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" class="form-control" style="color:#1EFF05" name= "address" placeholder="Ingrese la dirección" required>
                    </div>
                    <div class="d-grid text-center">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" id="registrar"  class="btn btn-sm btn-outline-secondary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
@endsection