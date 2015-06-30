$(document).ready(function() {
	$('.cabecera-de-herramienta-lista').click(function(event){
		if(!($(this).hasClass('herramienta-expandida'))) {
			console.log("Pulsado en " + $(this));
			var misHerramientas = $(this).next();
			$(misHerramientas).css({'display':'true'});
			$(misHerramientas).slideDown();
			$(this).toggleClass("herramienta-expandida");
		}
		else
		{
			var misHerramientas = $(this).next();
			$(misHerramientas).slideUp();
			$(misHerramientas).css({'display':'false'});
			$(this).toggleClass("herramienta-expandida");
		}
	});
});