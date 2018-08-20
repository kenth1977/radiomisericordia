	var contador = 1;
 
	function cambiarClase(){
		if (contador == 1) {
			document.getElementById('elemento').className = 'animated bounceInUp';
			contador = 2;
		} else {
			document.getElementById('elemento').className = '';
			contador = 1;
		}
	}
 
	document.getElementById('accion').onclick = cambiarClase;