$(document).ready(function() {
	$('.container lista-herramientas-totales').css({'display':'false'});
	
	$('.cabecera-de-herramienta-lista').click(function(event){
		if(!($(this).hasClass('herramienta-expandida'))) {
			console.log("Pulsado en " + $(this));
			var misHerramientas = $(this).next();
			
			$(misHerramientas).css({'display':'true'});
			$(misHerramientas).slideDown();
			$(this).toggleClass("herramienta-expandida");
			var icono = $($(this).children(':first')).children(':first');
			$(icono).toggleClass('icon-squared-plus');
			$(icono).toggleClass('icon-squared-minus');
		}
		else
		{
			var misHerramientas = $(this).next();
			$(misHerramientas).slideUp();
			$(misHerramientas).css({'display':'false'});
			$(this).toggleClass("herramienta-expandida");
			var icono = $($(this).children(':first')).children(':first');
			$(icono).toggleClass('icon-squared-minus');
			$(icono).toggleClass('icon-squared-plus');
		}
	});

	$('.cabecera-de-herramienta-lista').mouseover(function (){
		$('.cabecera-de-herramienta-lista').css({'cursor':'pointer'});
	})
});