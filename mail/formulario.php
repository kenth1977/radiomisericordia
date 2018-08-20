<!DOCTYPE html>

<!-- http://unicode-table.com/es/ -->

<html lang="es">

<head>

	<!-- meta   estructura meta name="" content="" />  -->

	<meta charset="UTF-8">

	<meta name="language" content="es" />

	<meta name="language" content="en" />

	<meta name="author" content="Kenneth Ruiz" />

	<meta name="description" content="Noticias, noticias, NOTICIAS, Noticias pz, noticias pz, NOTICIAS PZ" />

	<meta name="description" content="Perez Zeledón, PZ, pz" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>

	

<!-- css -->

		

	<!-- bootstrap -->

	<link rel="stylesheet" href="../css/bootstrap.css">

	<link rel="stylesheet" href="../css/bootstrap.min.css">

		<!-- 	tema degradado opcional bootstrap-theme.min.css -->

		<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

	<!-- <link rel="stylesheet" href="css/reloj.css"> -->

	<!-- <link rel="stylesheet" href="css/chat.css"> -->



	<!-- Mis estilos -->

	<link rel="stylesheet" href="../css/formulario.css">

	<link rel="stylesheet" href="../css/footer.css">



	<!-- https://daneden.github.io/animate.css/ -->

	<!-- <link rel="stylesheet" href="css/Animate.css"> -->



	<!-- http://simbyone.com/30-css-hover-effects-for-buttons/ -->

	<!-- <link rel="stylesheet" href="css/btn_animate.css"> -->





<!-- fuentes -->



	<!-- Glyphicons -->

	<link rel="stylesheet" href="../fonts.css">



	<!-- fuente de la hora -->

	<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>

	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>

	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

	<link href='https://fonts.googleapis.com/css?family=Jura:400,600' rel='stylesheet' type='text/css'> 



<!-- titulo -->

	<title>C.L.Santillos | Contacto</title>

		<script src="../js/formulario.js"></script>



	

</head>



<!-- <body> -->

	

<body onload="actualizaReloj()" class="formulario">



<!-- Volver atrás -->

  <div class="container animated fadeInDown">

    <div class="row">

      <div class="col-xs-6 col-sm-2">

        <div class="btn-group btn-group-default" role="group" aria-label="...">

        <!-- <div class="btn-group" role="group">

          <a href="noticias.html">

            <button type="button " class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span></button>

          </a>

        </div> -->

        <div class="btn-group" role="group">

        <a href="index.html">

        <button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-home"></span></button>

        </a>

        </div>

      </div>

    </div>

  </div>

  </div>

<!-- Fin Volver Atrás -->







<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6">





	

	<form action="enviar.php" method="post"  class="animated jello form">



			<h2>CONTACTO</h2>

		<input type="text" name="nombre" id="nombre" placeholder="*nombre" class="form-control"  required >

		

		<input type="email" name="email" id="email" title="Solo digite correos electrónicos (Obligatorio)" placeholder="*email" class="form-control" required>

		

		

		<input type="tel" name="telefono" title="Los números telefonicos en Costa Rica son de 8 dígitos"   placeholder="telefono" id="telefono" class="form-control" onkeypress="return solonumeros(event);" minlenght="8" maxlength="8">

		

		<input type='text' class="form-control" placeholder="*asunto" name="asunto" id="asunto" value=''>

	



		<textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="*Escriba su mensaje"  required></textarea >

		



 		<input type="submit" value="Enviar" id="Boton" name="Boton" class="btn btn-info" onclick="pregunta()">

		</form>

	</div>

	

	<div class="col-xs-12 col-sm-6" >

		<div class="detalle">



	<img src="img/logo2.png " alt="" class="img-responsive img-logo center-block" width="80%">



	<br>



	<p class="text-justify text-form-1">

		Gracias por visitar nuestras cabinas. Es un placer servirles y esperamos que la estadía en Los Santillos sea agradable.

	 </p>

		</div>



		<div class="detalle1">

			Con mucho gusto si desea realizar una sugerencia, una reservación o conocer nuestras tarifas puede comunicarse con nosotros o bien enviarnos el formulario con su solicitud, 



			<br><br>

			



			<!-- <div class="email">

			<span class="glyphicon glyphicon-envelope"> </span>

			</div> -->

			<h4><span class="glyphicon glyphicon-phone"> 2779-6264 | 8898-8650 </h4 class="center-"></span>

			<br><br>

			<a href="https://www.facebook.com/cabinas.santillos?fref=ts" target="blank">	

			<button class="btn btn-info center-block">Facebook</button></a>

			



		</div>

	</div>

		



</div>

</div>



<br><br>





<!-- Scrolling Nav JavaScript -->

	 	

	<script src="js/jquery.easing.min.js"></script>

	<script src="js/scrolling-nav.js"></script>	

	<script src="js/jquery.js"></script>

	<script src="js/jquery-2.1.4.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/npm.js"></script>

	<script src="js/reloj.js"></script>

	<script src="js/chat.js"></script>

		

	</body>

</html>





