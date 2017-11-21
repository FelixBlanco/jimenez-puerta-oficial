$(document).ready(function(){

/******************************
| HOVER DE LAS REDES SOCIALES
******************************/

$('.hover-redes').hover(function(){

	var info = $(this).attr('alt');

	console.log(info);

},function(){

	var info = $(this).attr('alt');

	console.log(info);
	
})