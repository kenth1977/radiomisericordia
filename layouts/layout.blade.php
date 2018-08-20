<!DOCTYPE html>
<html lang="es">

<!-- head -->
  <head>
  	<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Kenneth Ruiz" content="DESCRIPCION DE CONTENIDO">
    <meta name="DESCRIPCION DE CONTENIDO" content="DESCRIPCION DE CONTENIDO">
    <meta name="DESCRIPCION DE CONTENIDO" content="DESCRIPCION DE CONTENIDO">

  	<title>PLANTILLA BOOTSTRAP 4</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate https://daneden.github.io/animate.css/ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="css/reloj.css"> -->
    <link rel="stylesheet" href="css/style.css"> <!-- SCROLL Gem style -->
    <!-- link de formulario css -->
    <link rel="stylesheet" href="css/main.css"> <!--SASS -->

    <!-- CSS -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts_icomoon/style.css">

        {{-- https://github.com/daneden/animate.css --}}
        {{-- Sintaxis -> class="animated bounceIn" --}}
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/contactos.css">
    <link rel="stylesheet" href="css/flex.css">

        <!-- FUENTES -->
    <!-- https://fontawesome.com/icons?d=gallery&m=free -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Arima+Madurai|Berkshire+Swash|BioRhyme+Expanded|Cinzel|Cinzel+Decorative|Courgette|Indie+Flower|Josefin+Slab|Julius+Sans+One|Kalam|Kaushan+Script|Lato|Montserrat|Mukta+Mahee|Nanum+Brush+Script|Nanum+Myeongjo|Nanum+Pen+Script|Open+Sans|Open+Sans+Condensed:300|Orbitron|Oswald|Parisienne|Poiret+One|Quicksand|Raleway|Rammetto+One|Rancho|Roboto|Roboto+Condensed|Russo+One|Shrikhand|Slabo+27px|Source+Sans+Pro|Syncopate" rel="stylesheet"> 
    
  </head>
<!-- fin head -->

<body class="body" onload="actualizaReloj()">


<nav class="navbar navbar-expand-lg navbar-light bg-light animated bounceInLeft">
    <a class="navbar-brand" href="#"><img  src="img/nombrehsdhs.png" alt="" width="200px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('galeria') }}">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reservacion') }}">Reservación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contactanos') }}">Contactanos</a>
        </li>
      </ul>
      {{-- <span class="navbar-text">
        Navbar text with an inline element
      </span> --}}
    </div>
  </nav>
<!--HORA-->
  <!-- No borrar...Este es el contenedor que tiene la función JS del reloj. Si se va a ocultar solo comentariar el código para no hacerlo visible.-->

           {{-- <div class="container">
               <div class="main row"  id="relojcontainer">
                  <div class="mainclock">
                  <div class="reloj" id="Fecha_Reloj"> 
                  </div>
              </div>
              </div>
          </div>  --}}
<!-- FIN HORA-->

@yield('contenido')

  <div class="container-fluid footer">
    <div class="row">

      <div class="col-xs-12 col-sm-4">
        <ul class="iniciofootermap">
          <li class="lifootermap"><a href="/">Inicio</a></li>
          <li class="lifootermap"><a href=" {{ route('galeria') }}">Galeria</a></li>
          <li class="lifootermap"><a href=" {{ route('reservacion') }}">Reservaciones</a></li>
          <li class="lifootermap"><a href=" {{ route('contactanos') }}">Contactanos</a></li>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-4">
        <!-- <h3>titulo footer</h3> -->
          <img src="img/logohs.png " class="mx-auto d-block logofooter" alt="Responsive image" width="150px">
          <br>
      </div>
    
      <div class="col-xs-12 col-sm-4">
       
      <div class="row">
        <img class="img-fluid imgtarjeta rounded mx-auto d-block" alt="Responsive image" src="img/tarjetas.png" >
      </div> 
        
      <div class="row desarrollo">
        <p>Sitio web creado, publicado y probado con:
        <br>
        <br>
        <i class="fab fa-laravel"></i>
        <i class="fab fa-sass"></i>
        <i class="fab fa-github"></i>
        <i class="fab fa-firefox"></i>
        <i class="fab fa-google"></i>
        <i class="fab fa-opera"></i>
        <i class="fab fa-tripadvisor"></i>
        </p>

        <br><br>
        <p>© 2018. All rights reserved. Hotel El Sueño & Hotsprings </p>
      </div>
    </div>
  </div> 

  <!--Scroll arriba -->
    <a href="#0" class="cd-top">Top</a>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
  <!--Fin scroll arriba -->

  <!-- script Reloj & script animate.js  -->
    <script src="js/reloj.js"></script>
    <script src="js/Animate.js"></script>
  <!-- Fin script animate.js -->

    <!-- HTML4 y (x)HTML 
     <script type="text/javascript" src="javascript.js"></script> -->

    <!-- JS HTML5 -->
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/tether.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <!-- JS HTML5 -->

</body>
</html>