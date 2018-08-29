<!-- CONTADOR DE VISITAS -->

  <!-- EL CODIGO DE PHP VA ARRIBA DEL DOCTYPE -->

  <?php 

    

    // hacer referencia a un archivo que esta afuera

    $a = file ("contador.data");

    // $b hace referencia a la variable $a y su contenido y va almacenar todo el archivo de

    // de la variable a lo que va hacer es que va a leer la fila 0 cada vez que ingresa aumenta 



    $b = $a [0];

    $conteo=0;

    // Condicion de visita

    if($_COOKIE['conteo']==1){

        

      



    }else{



      $b = $b + 1;

      $conteo = fopen("contador.data", "w");

      fwrite($conteo, $b);

      fclose($conteo);

      setcookie("conteo" , "1");

      // echo"<b> $b Visitas </b>";
    }

  ?>
  <!--PEGAR EN HTML -->

  <!-- MENSAJE DE CONTADOR   -->

    <!-- Mensaje de contador -->

    <!-- se necesita el archivo contador.data y el php del encabezado 

    OJO ELIMINAR EL "! DE etiqueta de apertura de php"

    -->
   <!--
    <div class="container">

      <div class="row">

        <div class="col-xs-12 text-center">

          <!?php echo"<p> <small> $b Personas han visitado</small> <b>cabinaslossantillos.com</b></p>"; ?> 

        </div>

      </div>

    </div>



     -->



  <!-- FIN MENSAJE DE CONTADOR   -->
<!-- FIN CONTADOR DE VISITAS -->


<!DOCTYPE html>
<html lang="es">

<!-- head -->
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Kenneth Ruiz" content="DESCRIPCION DE CONTENIDO">
    <meta name="DESCRIPCION DE CONTENIDO" content="DESCRIPCION DE CONTENIDO">
    <meta name="DESCRIPCION DE CONTENIDO" content="DESCRIPCION DE CONTENIDO">

  	<title>Radio Misericordia Juvenil</title>
    
    
    <link rel="stylesheet" href="css/estilos.css">
    
    
    <!-- Icono de pestaña -->
    <link rel="shortcut icon" href="img/rmjcrico.ico" />
    

    <script id="dsq-count-scr" src="//aeromodelismodecostarica-1.disqus.com/count.js" async></script>
    
        <!-- FUENTES -->
    <!-- https://fontawesome.com/icons?d=gallery&m=free -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- <link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Arima+Madurai|Berkshire+Swash|BioRhyme+Expanded|Cinzel|Cinzel+Decorative|Courgette|Indie+Flower|Josefin+Slab|Julius+Sans+One|Kalam|Kaushan+Script|Lato|Montserrat|Mukta+Mahee|Nanum+Brush+Script|Nanum+Myeongjo|Nanum+Pen+Script|Open+Sans|Open+Sans+Condensed:300|Orbitron|Oswald|Parisienne|Poiret+One|Quicksand|Raleway|Rammetto+One|Rancho|Roboto|Roboto+Condensed|Russo+One|Shrikhand|Slabo+27px|Source+Sans+Pro|Syncopate" rel="stylesheet"> 
    
  </head>
<!-- fin head -->

<body class="body" onload="actualizaReloj()">



