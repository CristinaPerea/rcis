/*$(document).ready(function () {
	var menu = $('div.dropdown');
	if($(window).width() < 768) {
		if($(menu).attr('class') == "dropdown") {
			$(menu).toggleClass('dropdown');
			$(menu).addClass('dropup');
		}
	}
	if($(window).width() >= 768) {
		if($(menu).attr('class') == 'dropup') {
			$(menu).toggleClass('dropup');
			$(menu).addClass('dropdown');
		}
	}
});*/

$(document).ready(function () {
	$('li.dropdown').click(function() {
		console.log("He clickeado en el li");
		if($("li.dropdown.open")) {
			console.log("Encuentro open");
			$(this).css('top','-200px;');
		}
		else{
			$(this).css('top','0px;');
		}
	});		
});