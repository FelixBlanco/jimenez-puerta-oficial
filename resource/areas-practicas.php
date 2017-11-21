<!-- Modal -->
<div id="modal-practica" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content bg-azul">
      <div class="modal-body">
      	<div class="text-right">
       		<button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      	</div>
      	<div class="paddin-8">
      		<h3 class="txt-blanco" id="text-title"></h3>
      		<hr class="bg-azul linea linea-center-small" style="background-color: white; width: 30%; margin-left: 0%;">
	       <p class="text-justify txt-blanco paddin-top-2" id="text-description">
	       </p>
      	</div>

      </div>
    </div>

  </div>
</div>

<div class="espacio-50"></div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center font-bold font-size-30" style="color: #5d5c5c;">ÁREAS DE PRÁCTICA</h2>
			<hr class="linea linea-right-azul">
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 linea-right-azul hover-practicas areas-practicas DERECHO-CONCURSAL" alt="DERECHO-CONCURSAL">
			<img src="img/areas-practicas/1.0.png"  class="center-block img-responsive hover-redes">
			<h3 class="text-center font-size-24 font-bold margin-top-15 txt-azul" style="margin-top: 20%;">
				DERECHO CONCURSAL
			</h3>
			<hr class="linea bg-azul lineas-center">
			<div class="text-center">
				<button class="btn-azul-32 click-modal-practica" data-toggle="modal" data-target="#modal-practica" title="DERECHO CONCURSAL" description='(Reorganización Empresarial e Insolvencia de Persona Natural no Comerciante)
				Destacados en asesoramiento y práctica en los diferentes mecanismos de salvamento empresarial, tales como, reorganización empresarial, validación judicial de acuerdos extrajudiciales de reorganización, liquidación judicial e insolvencia de persona natural no comerciante y liquidaciones patrimoniales.'>
					VER MÁS
				</button>
			</div>
		</div>
		<div class="col-md-4 linea-right-azul hover-practicas areas-practicas SOLUCIONES-EMPRESARIALES" alt="SOLUCIONES-EMPRESARIALES">
			<img src="img/areas-practicas/2.0.png"  class="center-block img-responsive hover-redes">
			<h3 class="text-center font-size-24 font-bold margin-top-20 txt-azul" style="margin-top: 20%;">
				DERECHO FINANCIERO	
			</h3>
			<hr class="linea bg-azul lineas-center">
			<div class="text-center">
				<button class="btn-azul-32 click-modal-practica" data-toggle="modal" data-target="#modal-practica" title="DERECHO FINANCIERO" description='Representación y defensa de entidades financieras en litigios derivados de la responsabilidad civil contractual y extracontractual de sus agentes, análisis jurídico de riesgos financieros.'>
					VER MÁS
				</button>
			</div>
		</div>
		<div class="col-md-4 hover-practicas areas-practicas DERECHO-COMERCIAL" alt="DERECHO-COMERCIAL">
			<img src="img/areas-practicas/3.0.png"  class="center-block img-responsive hover-redes">
			<h3 class="text-center font-size-24 font-bold margin-top-15 txt-azul" style="margin-top: 20%;">
				DERECHO COMERCIAL
			</h3>
			<hr class="linea bg-azul lineas-center">
			<div class="text-center">
				<button class="btn-azul-32 click-modal-practica" data-toggle="modal" data-target="#modal-practica" title="DERECHO COMERCIAL" description='Asesoramiento y práctica societaria integral, contratos de colaboración empresarial, contratos societarios, asesoramiento en inversión extranjera.'>
					VER MÁS
				</button>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12 bg-gris padding-8">
			<a href="areas-practicas.php">
				<h3 class="text-right txt-m-gris font-size-16"><b>MÁS ÁREAS DE PRÁCTICA</b></h3>
			</a>
		</div>
	</div>
</div>

<script>	

// Mensajes
$(document).ready(function(){
	$('.click-modal-practica').click(function(){

		var title 		= $(this).attr('title');
		var description = $(this).attr('description');

		$("#text-title").text(title);
		$("#text-description").text(description);

	})
})


// Hover
$(".hover-practicas").hover(function(){
	
	var info = $(this).attr('alt');
	console.log(info);
	if (info == 'DERECHO-CONCURSAL') {
		$("."+info +" img").attr('src','img/areas-practicas/1.1.png');
		$("."+info +" button").removeClass('btn-azul-32')
		$("."+info +" button").addClass('btn-azul-32-bg');
	}

	if (info == 'SOLUCIONES-EMPRESARIALES') {
		$("."+info +" img").attr('src','img/areas-practicas/2.1.png');
		$("."+info +" button").removeClass('btn-azul-32')
		$("."+info +" button").addClass('btn-azul-32-bg');
	}

	if (info == 'DERECHO-COMERCIAL') {
		$("."+info +" img").attr('src','img/areas-practicas/3.1.png');
		$("."+info +" button").removeClass('btn-azul-32')
		$("."+info +" button").addClass('btn-azul-32-bg');
	}

},function(){

	var info = $(this).attr('alt');
	console.log(info);

	if (info == 'DERECHO-CONCURSAL') {
		$("."+info +" img").attr('src','img/areas-practicas/1.0.png');
		$("."+info +" button").removeClass('btn-azul-32-bg');
		$("."+info +" button").addClass('btn-azul-32');
	}

	if (info == 'SOLUCIONES-EMPRESARIALES') {
		$("."+info +" img").attr('src','img/areas-practicas/2.0.png');
		$("."+info +" button").removeClass('btn-azul-32-bg');
		$("."+info +" button").addClass('btn-azul-32');
	}

	if (info == 'DERECHO-COMERCIAL') {
		$("."+info +" img").attr('src','img/areas-practicas/3.0.png');
		$("."+info +" button").removeClass('btn-azul-32-bg');
		$("."+info +" button").addClass('btn-azul-32');
	}

})


</script>