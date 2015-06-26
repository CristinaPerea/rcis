$(document).ready(function() {
	$(".infolinks").toggle();
	$(".tablaTotal").toggle();
});

$(".botonFlip").click(function(event){
	var opcion = $(this).text();

	if(opcion == "Más publicaciones"){
		$(".tablaResumen").slideUp(function() {
			$(".tablaTotal").slideDown(1000);		
		});
		$(this).text("Menos publicaciones");
		$(".titulo-tablas-publicaciones").text("Publicaciones sobre ciencia e ingeniería de servicios");
	}
	else {
		$(this).text("Más publicaciones");
		$(".tablaTotal").slideUp(1000, function() {
			$(".tablaResumen").slideDown();
		});	
		$(".titulo-tablas-publicaciones").text("Publicaciones de la red");
	}
	event.preventDefaul();
	window.location.href = "#cta-section";
});