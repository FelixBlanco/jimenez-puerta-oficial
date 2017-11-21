
<!-- Contactos -->
<section id="contactos" class="bg-azul margin-top-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 paddin-top-3">
				<h2 class="text-center txt-blanco">¿Cómo podemos ayudarle?</h2>
				<p class="text-center txt-blanco">Contáctenos estamos listo para atender su caso</p>
			</div>
		</div>
		<div class="row paddin-top-1">
			<form action="mail.php" method="post">
				<div class="col-md-4 col-md-offset-2">
					<div class="row margin-top-3">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" required name="n_a" placeholder="Nombre y Apellido" class="form-control input-lg">
							</div>
						</div>
					</div>
					<div class="row margin-top-3">
						<div class="col-md-12">
							<div class="form-group">
								<input type="email" required name="email" placeholder="Correo Electrónico" class="form-control input-lg">
							</div>
						</div>
					</div>
					<div class="row margin-top-2">
						<div class="col-md-12">
							<div class="form-group">
								<input type="tel" required name="telefono" placeholder="Teléfono" class="form-control input-lg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group margin-top-3">
						<textarea required name="mensaje" placeholder="Mensaje de Asunto" id="" rows="5" class="form-control"></textarea>
					</div>
					<div class="text-center margin-top-movil-2">
						<div class="form-group">
							<button class="btn btn-block btn-enviar btn-bg-button bg-azul-oficial text-white" style="margin-top: 2%;">Enviar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center txt-blanco font-bold">gestionjuridica@jimenezpuerta.com</h4> <br>
				<ul class="list-inline text-center paddin-bottom-3 redes-footer">
					<li>
						<a href="https://www.facebook.com/jimenezpuertaabogados/" target="_blank">
							<img src="img/social/Face-blanco-60px.png" alt="facebook_formulario" class="img-responsive center-block hover-redes">
						</a>
					</li>
					<li class="margin-left-2">
						<a href="https://www.instagram.com/jimenezpuertaabogados/" target="_blank">
							<img src="img/social/insta-blanco-60px.png" alt="instagram_formulario" class="img-responsive center-block hover-redes">
						</a>
					</li>
					<li class="margin-left-2">
						<a href="https://www.youtube.com/channel/UCKiJoWvSqM2BlzgWQlgBQqQ" target="_blank">
							<img src="img/social/youtube-blanco-60px.png" alt="youtube_formulario" class="img-responsive center-block hover-redes">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-right padding-8">
				<a data-scroll href="#top-nav" class="txt-blanco">
					<span class="glyphicon glyphicon-menu-up font-size-20 manito-mouse"></span>
				</a>
			</div>
		</div>
	</div>
</section>


<!-- Footer -->
<footer class="">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-center paddin-top-1">2017 Jimenez Puerta. todos los derechos reservados. Diseño y Desarrollo por Creativos B3 C.A</p>
			</div>
		</div>
	</div>
</footer>



<script>

/******************************
| HOVER DE LAS REDES SOCIALES
******************************/

$(".hover-redes").hover(function(){ // Cambio del Icono

	var ConteHover = $(this).attr('alt');

	// Redes Sociales | Header 

	if(ConteHover == 'Facebook'){
		$(this).attr('src','img/social/F2-50-x50.png');
	}

	if(ConteHover == 'Instagram'){
		$(this).attr('src','img/social/I2-50-x50.png');
	}

	if(ConteHover == 'Youtube'){
		$(this).attr('src','img/social/Y2-50-x50.png');
	}


	// FORMULARIO 

	if(ConteHover == 'facebook_formulario'){
		$(this).attr('src','img/social/Face-azul-60px.png');
	}

	if (ConteHover == 'instagram_formulario') {
		$(this).attr('src','img/social/insta-azul-60px.png');
	}

	if (ConteHover == 'youtube_formulario') {
		$(this).attr('src','img/social/youtube-azul-60px.png');
	}

},function(){ // Volvemos a el estado normal 
	
	var ConteHover = $(this).attr('alt');

	// Redes Sociales | Header 

	if(ConteHover == 'Facebook'){
		$(this).attr('src','img/social/F1-50-x50.png');
	}

	if(ConteHover == 'Instagram'){
		$(this).attr('src','img/social/I1-50-x50.png');
	}

	if(ConteHover == 'Youtube'){
		$(this).attr('src','img/social/Y1-50-x50.png');
	}

	// FORMULARIO 

	if(ConteHover == 'facebook_formulario'){
		$(this).attr('src','img/social/Face-blanco-60px.png');
	}

	if (ConteHover == 'instagram_formulario') {
		$(this).attr('src','img/social/insta-blanco-60px.png');
	}

	if (ConteHover == 'youtube_formulario') {
		$(this).attr('src','img/social/youtube-blanco-60px.png');
	}

})	

// Home 
function ver_mas(clase){

	$('.'+clase+'_btn').css('display','none');

	$('.'+clase+'_title').animate({
		marginTop:'5%',
		marginLeft:'10%'
	},function(){
		$('.'+clase+'_linea').animate({
			marginLeft:'20%'
		},function(){
			$('.'+clase+'_p').slideDown('slow');
		})
	});

}

function ver_menos(clase){

	$('.'+clase+'_p').slideUp('slow',function(){
		
		if(clase == 'vent_corp'){
			$('.'+clase+'_title').animate({
				marginTop : '25%',
				marginLeft: '25%'
			},function(){
				$('.'+clase+'_linea').animate({
					marginLeft:'38%'
				},function(){
					$('.'+clase+'_btn').css('display','block');
				})
			});
		}

		if (clase == 'obj_corp') {		
			$('.'+clase+'_title').animate({
				marginTop : '15%',
				marginLeft: '25%'
			},function(){
				$('.'+clase+'_linea').animate({
					marginLeft:'38%'
				},function(){
					$('.'+clase+'_btn').css('display','block');
				})
			});
		}
		
	});


}

</script>


<script src="js/smooth-scroll.js"></script>
<script src="js/smooth-scroll.polyfills.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>