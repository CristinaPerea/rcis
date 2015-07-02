/*$(document).ready(function(){
	console.log("Aquí");
	$("iframe>html>body.wholeDocument").css('background-color','transparent');
	console.log("Aquí otra vez");
});*/

$(document).ready(function(){
	$('#iframe-outline').load(function(){
		$(this).contents().find('body').css({'background-color':'transparent'});
	});
});