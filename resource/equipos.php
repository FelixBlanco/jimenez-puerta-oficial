<!-- Modal -->
<div id="modal-perfiles" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content bg-azul">
      <div class="modal-body">
      	<div class="text-right">
       		<button type="button" class="close txt-blanco" data-dismiss="modal">&times;</button>
      	</div>
      	<div class="paddin-8">
      		<h3 class="txt-blanco" id="text-title-perfiles"></h3>
      		<hr class="bg-azul linea linea-center-small" style="background-color: white; width: 30%; margin-left: 0%;">
	       <p class="text-justify txt-blanco paddin-top-2" id="text-description-perfiles">
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
			<h2 class="text-center font-bold font-size-30 " style="color: #5d5c5c;">NUESTRO EQUIPO</h2>
			<hr class="linea bg-gris-oscuro lineas-center">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 img-perfile Vladimir" alt="Vladimir">
			<img src="img/perfiles/Vladimir.0.png" class="img-responsive center-block">
			<div class="text-center">
				<button class="btn-azul-32-bg font-size-18 font-bold click-modal-perfiles cursor" data-toggle="modal" data-target="#modal-perfiles" title="VLADIMIR JIMÉNEZ PUERTA" description='Abogado egresado de la Universidad Santiago de Cali, especialista en Derecho Comercial, Financiero y Administrativo de las Universidades de Nuestra Señora del Rosario, y Pontificia Bolivariana de Medellín. Durante su trayectoria profesional se ha destacado
				con éxito en las áreas de asesoría y litigios especiales de alta complejidad de importantes entidades del sector financiero y empresas
				del sector real. Amplia experiencia en negociación y solución de conflictos corporativos. Miembro adherente del Instituto Colombiano de Derecho Concursal, asesor en procesos concursales y de reestructuración
				empresarial (Reorganización Empresarial e Insolvencia de Persona Natural), con más de 15 años de experiencia en esta materia,
				miembro de varias juntas directivas de prestigiosas empresas del sector real. ' style="margin-top: -3%; font-size: 18px; ">PERFIL</button>
			</div>
			<h3 class="text-center txt-azul font-bold font-size-24">VLADIMIR JIMÉNEZ PUERTA</h3>
		</div>
		<div class="col-md-4 img-perfile ROBERTO" alt="ROBERTO">
			<img src="img/perfiles/Roberto.0.png" class="img-responsive center-block">
			<div class="text-center">
				<button class="btn-azul-32-bg font-size-18 font-bold click-modal-perfiles cursor" data-toggle="modal" data-target="#modal-perfiles" title="ROBERTO MAYORGA GUITARRERO" description='Abogado egresado de la Universidad Santiago de Cali, especialista en Derecho Procesal y en Derecho de la Seguridad Social de la Universidad Pontificia Bolivariana de Cali y Medellín respectivamente. Líder del área de litigios especiales de la firma Jiménez Puerta Abogados. Consultor empresarial, con amplia experiencia como abogado litigante.' style="margin-top: -3%; font-size: 18px;">PERFIL</button>
			</div>
			<h3 class="text-center txt-azul font-bold font-size-24">ROBERTO MAYORGA GUITARRERO</h3>
		</div>
		<div class="col-md-4 img-perfile JULIAN" alt="JULIAN">
			<img src="img/perfiles/Julian.0.png" class="img-responsive center-block">
			<div class="text-center">
				<button class="btn-azul-32-bg font-size-18 font-bold click-modal-perfiles cursor" data-toggle="modal" data-target="#modal-perfiles" title="JULIAN AGUDELO" description='Abogado egresado de la Universidad San Buenaventura de Cali. Especialista en Derecho Económico y Magister en Derecho Empresarial de la Universidad Icesi. Líder del área de derecho concursal y negocios fiduciarios de la firma Jiménez Puerta Abogados. Amplia experiencia en la estructuración de negocios fiduciarios y estrategias de reestructuración de empresas. ' style="margin-top: -3%; font-size: 18px; ">PERFIL</button>
			</div>
			<h3 class="text-center txt-azul font-bold font-size-24">JULIAN AGUDELO</h3>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12 bg-gris padding-8">
			<a href="equipos.php">
				<h3 class="text-right txt-m-gris font-size-16 padding-8"><b>MÁS PERFILES</b></h3>
			</a>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){

		// Hover
		$(".img-perfile").hover(function(){
			
			var img = $(this).attr('alt');

			if (img == 'Vladimir') {
				$("."+img+" img").attr('src','img/perfiles/Vladimir.1.png');
			}

			if (img == 'ROBERTO') {
				$("."+img+" img").attr('src','img/perfiles/Roberto.1.png');
			}

			if (img == 'JULIAN') {
				$("."+img+" img").attr('src','img/perfiles/Julian.1.png');
			}


		},function(){
			var img = $(this).attr('alt');

			if (img == 'Vladimir') {
				$("."+img+" img").attr('src','img/perfiles/Vladimir.0.png');
			}
			
			if (img == 'ROBERTO') {
				$("."+img+" img").attr('src','img/perfiles/Roberto.0.png');
			}

			if (img == 'JULIAN') {
				$("."+img+" img").attr('src','img/perfiles/Julian.0.png');
			}

		})

		// Mensaje
		$('.click-modal-perfiles').click(function(){

			var title 		= $(this).attr('title');
			var description = $(this).attr('description');

			$("#text-title-perfiles").text(title);
			$("#text-description-perfiles").text(description);

		})
	})
</script>