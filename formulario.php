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
				
 			<p class="text-justify">Este sitio fué diseñado para brindar información acerca de la actividad del aeromodelismo en Costa Rica en las diversas categorías que incluye: aviones, planeadores, helicópteros y Drones a Radio Control. El mismo pretende guiar a nuevos pilotos e interesados a involucrarse en esta actividad a conocer algunos conceptos, grupos oficiales y normas necesarias para practicar este apasionante hobby de una manera más segura.</p>

 			<p class="text-justify">Por otra parte desea la unión de los diversos grupos aeromodelistas a compartir entre sí,  colaborar con los iniciantes y velar por la seguridad de las normas establecidas por las entidades reguladoras,  evitando incidentes innecesarios por ignorancia o irresponsabilidad de los participantes expertos y aficionados.</p>
			
			<p class="text-justify">El sitio está en proceso de desarrollo por lo que la información es básica pero pretende ir expandiendo los servicios como su propio espacio de compra, venta e intercambios de productos relacionados entre otros hasta centralizar todo lo referente al tema.</p>
				
			<br>
			<p class="text-center"><strong>Somos la comunidad Aeromodelismo de Costa Rica.</strong></p>

			<a href="img/logos1.png" data-lightbox="mygallery"><img src="img/logos1.png" alt="" width="80%" class="img-responsive mx-auto d-block"></a>
			<br>
			<hr>
			<a href="logo.php"><h6 class="text-right">Información de logos</h6></a>


		</div>
				
			<div class="col-xs-12 col-md-6">
				<h3 class="text-center">Bienvenidos</h3>
				<p>Si desea realizar una consulta o sugerencia puede escribirnos o llamar al <strong>86227500 de Lunes a Viernes de 8:00 am a 5:00 pm,</strong> también puedes dejar un mensaje en esta misma página con tu usuario de twiter o Facebook. </p>	

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
		<h1 class="text-center h1titulos">Comentarios</h1>
			<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://aeromodelismodecostarica-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
			</div>
		</div>
	</div>


<?php include 'footer.php'; ?>