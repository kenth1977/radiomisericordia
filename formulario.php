<?php include './header.php'; ?>
<?php include './navbar.php'; ?>

	<div class="container titulos">
		<h1 class="text-center h1titulos">
				CONTACTANOS
		</h1>
	</div>

	<br>

	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 col-md-6">

			<img src="img/log2-min.png" alt="" width="40%" class="img-responsive mx-auto d-block">
			
 			<h3 class="text-center">Nuestro Sitio</h3>
				
 			<p class="text-justify">Cumplimos dos años al servicio  de  la  Iglesia Católica    de    Costa Rica,  y  el  mundo por medio       de     Radio Misericordia Juvenil.</p>
			
			<p class="text-justify">Somos un grupo de amigos que llegamos a ser parte de una gran familia con una Obra de Misericordia con diversos carismas y talentos que están al servicio de la Iglesia.</p>

 			<p class="text-justify">Si desea realizar una consulta o sugerencia puede escribirnos o llamar al <strong>(506)8375-4030 de Lunes a Viernes de 8:00 am a 5:00 pm,</strong> también puedes dejar un mensaje en nuestro perfil de Facebook. </p>

 			<a href="index.php"><img class="mx-auto d-block" src="img/rmjcr.png" class="img-fluid" alt="Responsive image" width="60%"></a>
		</div>
				
		<div class="col-xs-12 col-md-6">	
			<form action="enviar.php" method="post"  class="animated fadeInUpBig form">
					<h2>Contactanos</h2>
				<input type="text" name="nombre" id="nombre" placeholder="*nombre" class="form-control"  required >
				<input type="email" name="email" id="email" title="Solo digite correos electrónicos (Obligatorio)" placeholder="*su email" class="form-control" required>
				<input type="tel" name="telefono" title="Los números telefonicos en Costa Rica son de 8 dígitos"   placeholder="telefono" id="telefono" class="form-control" onkeypress="return solonumeros(event);" minlenght="8" maxlength="8">
				<input type='text' class="form-control" placeholder="*asunto" name="asunto" id="asunto" value=''>
				<textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="*Escriba su mensaje"  required></textarea >
				<input type="submit" value="Enviar" id="Boton" name="Boton" class="btn btn-info" onclick="pregunta()">
			</form>
			</div>
		</div>
	</div>

	<br><br>

	<div class="container divubicacion">
		<h1 class="text-center h1titulos">COMENTARIOS</h1>
			<div id="disqus_thread"></div>
	</div>



<?php include 'disqus.php'; ?>
<?php include 'footer.php'; ?>