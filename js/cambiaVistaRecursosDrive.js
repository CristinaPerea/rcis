$(document).ready(function(){
	$('#boton-vista-drive').click(function() {
		var actual = $('#boton-vista-drive').children(":first");
		//console.log(actual);
		var icono = $(actual).attr('class');
		//console.log(actual);
		if(icono == 'icon-file-text2')
		{
			$(actual).removeClass("icon-file-text2");
			$(actual).addClass("icon-list");
			var miframe = $('#iframe-recursos');
			var enlace = $(miframe).attr('src');
			//console.log(enlace);
			var nuevoEnlace = enlace.replace("#grid", "#list");
			$(miframe).attr('src', nuevoEnlace);
		}
		else
		{
			$(actual).removeClass("icon-list");
			$(actual).addClass("icon-file-text2");
			var miframe = $('#iframe-recursos');
			var enlace = $(miframe).attr('src');
			console.log(enlace);
			var nuevoEnlace = enlace.replace("#list", "#grid");
			$(miframe).attr('src', nuevoEnlace);
		}
	});
});