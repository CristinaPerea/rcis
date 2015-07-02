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
/*$(document).ready(function(){
            $('#qs_tableTotal').after('<div id="nav"></div>');
            var rowsShown = 4;
            var rowsTotal = $('#qs_tableTotal tbody tr').length;
            var numPages = rowsTotal/rowsShown;
            for(i = 0;i < numPages;i++) {
                var pageNum = i + 1;
                $('#nav').append('<a href="#pagina" rel="'+i+'">'+pageNum+'</a> ');
            }
            $('#qs_tableTotal tbody tr').hide();
            $('#qs_tableTotal tbody tr').slice(0, rowsShown).show();
            $('#nav a:first').addClass('active');
            $('#nav a').bind('click', function(){
 
                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('#qs_tableTotal tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
                        css('display','table-row').animate({opacity:1}, 300);
            });
        });*/

$(".botonFlip").click(function(event){
	var opcion = $(this).text();

	if(opcion == "Ver publicaciones sobre Ciencia e Ingeniería de Servicios"){
		$(".tablaResumen").slideUp(function() {
			$(".tablaTotal").slideDown(1000);
			
		});
		$(this).text("Ver publicaciones de RCIS");
		$('#qs_tableTotal').css({'overflow-y':'scroll'});
		$('#qs_tableTotal').css({'height':'400px'});
		$(".titulo-tablas-publicaciones").text("Publicaciones sobre Ciencia e Ingeniería de servicios");
	}
	else {
		$(this).text("Ver publicaciones sobre Ciencia e Ingeniería de Servicios");
		$(".tablaTotal").slideUp(1000, function() {
			$(".tablaResumen").slideDown();
			
		});	
		$('#qs_table').css({'overflow-y':'hidden'});
		$('#qs_table').css({'height':'auto'});
		$(".titulo-tablas-publicaciones").text("Publicaciones de RCIS");
	}
	event.preventDefault();
	window.location.href = "#cta-section";
});