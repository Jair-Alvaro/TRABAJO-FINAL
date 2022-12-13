@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Carousel Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      h2,p,ol{
        color: whitesmoke;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    


<main>



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<br><br><br>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img width="140" height="140" class="bd-placeholder-img rounded-circle" src="https://cdn-icons-png.flaticon.com/512/1801/1801575.png">
         <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://cdn.icon-icons.com/icons2/2899/PNG/512/presentation_data_analysis_icon_182985.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->

        <h2 class="fw-normal">Presentación</h2>
        <p>Fundada en 2022 por seis amigos universitarios en Arequipa (Peru), nom_pag se ha convertido desde entonces 
          en un sitio web que muestra precios, servicios y disponibilidad de habitacioness en un mismo sitio.. Estamos enfocados en remodelar la forma en que 
          millones de viajeros buscan y comparan hoteles y otros alojamientos, 
          </p>
   
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img width="140" height="140" class="bd-placeholder-img rounded-circle" src="https://798197cfdf.clvaw-cdnwnd.com/f29516659c90fe4f913db885dd854c3a/200000010-dc11cdc11d/con%20fondo%20redondo.png?ph=798197cfdf" alt="...">

        <h2 class="fw-normal">Misión</h2>
        <p>Ofrecer un servicio de calidad y confort en el mercado de servicio hotelero, proveyendo 
          a nuestros clientes servicio de alta calidad, creando con ello la satisfacción total y 
          dándonos a conocer por nuestros servicios y atención única en nuestra localidad.</p>
     
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img width="140" height="140" class="bd-placeholder-img rounded-circle" src="https://cdn-icons-png.flaticon.com/512/4924/4924164.png" alt="...">
        <h2 class="fw-normal">Visión</h2>
        <p>
          <ol>
          <li>Para el 2023 lograr los estándares de calidad requeridos en la prestación de servicios
            a nuestros huéspedes, a través de un proceso de mejora continua obteniendo una generación 
            de beneficios a través del mercado local y foráneo, en el que nuestro nombre llegue a ser uno de los 
            primeros en nuestra región.</li>
          <li>Añadir distintas funcionalidades extra como la de un programa que calcule el tiempo de vuelo optimo para
             trasladarse a nuestros distintos locales</li>
          </ol>
        <p>
          
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

   
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>



@endsection