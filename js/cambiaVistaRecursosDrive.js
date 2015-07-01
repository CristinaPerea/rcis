$(document).ready(function(){
	$('#boton-vista-drive-file').click(function() {
		var botonFile = $('#boton-vista-drive-file');
		var estado = $(botonFile).attr('class');
		
		//console.log(actual);
		if(!(estado == "btn btn-default"))
		{
			$(botonFile).toggleClass("btn-default");
			var miframe = $('#iframe-recursos');
			var enlace = $(miframe).attr('src');
			var botonList = $('#boton-vista-drive-list');
			botonList.toggleClass("btn-default");
			//console.log(enlace);
			var nuevoEnlace = enlace.replace("#list", "#grid");
			$(miframe).attr('src', nuevoEnlace);
		}
		
	});
	$('#boton-vista-drive-list').click(function() {
		var botonList = $('#boton-vista-drive-list');
		var estado = $(botonList).attr('class');
		console.log(estado);
		//console.log(actual);
		if(!(estado == "btn btn-default"))
		{
			$(botonList).toggleClass("btn-default");
			var miframe = $('#iframe-recursos');
			var enlace = $(miframe).attr('src');
			var botonFile = $('#boton-vista-drive-file');
			botonFile.toggleClass("btn-default");
			//console.log(enlace);
			var nuevoEnlace = enlace.replace("#grid", "#list");
			$(miframe).attr('src', nuevoEnlace);
		}
		
	});
});