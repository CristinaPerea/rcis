$(document).ready(function() {
	$(".infolinks").toggle();
	$(".tablaTotal").toggle();
	var micabecera =$("#qs_table>thead>tr>th");
	var i =0;
	for (i =0; i < micabecera.length; i++) {
		if($(micabecera[i]).text() == "Tipo de Ref.")
			$(micabecera[i]).css('display', 'none');
	}

	var mitabla = $("tr.entry>td:nth-child(5)");
	$(mitabla).css('display', 'none');

});

$(".botonFlip").click(function(event){
	var opcion = $(this).text();

	if(opcion == "Ver publicaciones sobre Ciencia e Ingeniería de Servicios"){
		$(".tablaResumen").slideUp(function() {
			$(".tablaTotal").slideDown(1000);		
		});
		$(this).text("Ver publicaciones de RCIS");
		$(".titulo-tablas-publicaciones").text("Publicaciones sobre Ciencia e Ingeniería de servicios");
	}
	else {
		$(this).text("Ver publicaciones sobre Ciencia e Ingeniería de Servicios");
		$(".tablaTotal").slideUp(1000, function() {
			$(".tablaResumen").slideDown();
		});	
		$(".titulo-tablas-publicaciones").text("Publicaciones de RCIS");
	}
	event.preventDefault();
	window.location.href = "#cta-section";
});