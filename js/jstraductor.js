var arrLang= {
	'es' : {
		'Inicio' : 'Inicio',
		'Galeria' : 'Galeria',
		'Reservacion' : 'Reservación',
		'Contactanos' : 'Contactanos',
		'Desarrollo' :  'Sitio web creado, publicado y probado con:'
	},

	'en' : {
		'Inicio' : 'Home',
		'Galeria' : 'Galleries',
		'Reservacion' : 'Reservation',
		'Contactanos' : 'Contact Us',
		'Desarrollo' : 'Website created, published and tested with:'
	}
};

$(function(){
	$('.translate').click(function(){
		var lang= $(this).attr('id');

	$('.lang').each(function(index, element){
		$(this).text(arrLang[lang][$(this).attr('key')]);
		});	
	});
});