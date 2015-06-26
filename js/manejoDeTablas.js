$(document).ready(function() {
	$(".tablaTotal").toggle();
});

$(".botonFlip").click(function(){
	var opcion = $(this).text();

	if(opcion == "Más publicaciones"){
		$(".tablaResumen").slideUp(function() {
			$(".tablaTotal").slideDown(1000);		
		});
		$(this).text("Menos publicaciones");
	}
	else {
		$(this).text("Más publicaciones");
		$(".tablaTotal").slideUp(1000, function() {
			$(".tablaResumen").slideDown();
		});	
		
	}
	window.location.href = "#cta-section";
});