<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!--HORA-->
  <!-- No borrar...Este es el contenedor que tiene la función JS del reloj. Si se va a ocultar solo comentariar el código para no hacerlo visible.

          <div class="container">
               <div class="main row"  id="relojcontainer">
                  <div class="mainclock">
                  <div class="reloj" id="Fecha_Reloj"> 
                  </div>
              </div>
              </div>
          </div>  -->
<!-- FIN HORA-->

	
<div class="container">
	<div class="row ">
		<div class="reproductor ">
			<div class="col-xs-12">
				<a href="http://78.129.234.163:6403/;.mp3/;stream.nsv" target="popup" onclick="window.open(this.href, this.target, 'location=no,width=400,height=200,resizable=no,scrollbars=no' ); return false;"><img src="img/reproductor.png" alt="" width="150px"></a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-sm-12">
		<div class="emblema">
			<h1>"UNA SEÑAL QUE VIENDE DESDE LO ALTO" <small>Radio católica en línea</small></h1>
			
		</div>	
	</div>
</div>
</div>


<!-- 
<audio autoplay="" controls=""><source src="http://78.129.234.163:6403/;.mp3/;stream.nsv" type="audio/mpeg"></audio> -->
<?php include 'carousel.php'; ?>
<?php include 'disqus.php'; ?>
<?php include 'footer.php'; ?>