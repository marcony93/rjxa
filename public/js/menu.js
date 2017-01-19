$(document).ready(main);
 
var contador = 1;

function main () {
	$('.navbar-toggle').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} 
	});