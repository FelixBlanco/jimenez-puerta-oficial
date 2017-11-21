<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div> -->
      <!-- <div class="modal-body">
      </div> -->
      <button type="button" class="btn-modal-close" data-dismiss="modal" style="
      	position: absolute;
    background: no-repeat;
    border-radius: 12px;
    border: 4px solid white;
    color: white;
    margin-left: 105%;
    padding: 12px"><span class="glyphicon glyphicon-remove"></span></button>
       <img src="img/iconos/galeria/1.png" class="img-responsive center-block img-thumbnail" id="img-modal">
    </div>

  </div>
</div>

<div class="container-fluid">
	<!-- Titulo -->
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center font-bold font-size-30" style="color:#5d5c5c;">
				GALERÍA
			</h2>
			<hr class="linea">
		</div>
	</div>

	<!-- Video Uno -->
	<div class="row">
		<div class="col-md-8 height-320 text-center" style="background-color: #d8d9de">
			<!-- 16:9 aspect ratio -->
<!-- 			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/2hnhLxOU5lM" frameborder="0" allowfullscreen></iframe>
			</div> -->
			 <iframe width="560" height="315" src="https://www.youtube.com/embed/2hnhLxOU5lM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="col-md-4 height-320" style="background-color: #edeef0;">
		</div>
	</div>

	<!-- Video Dos -->
	<div class="row">
		<div class="col-md-4 height-320" style="background-color: #0e4164">
		
		</div>
		<div class="col-md-8 height-320 text-center" style="background-color: #06325d">
			<!-- <div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/XdCmDYBywqo" frameborder="0" allowfullscreen></iframe> -->
			  <iframe width="560" height="315" src="https://www.youtube.com/embed/XdCmDYBywqo" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
	<div class="espacio-50"></div>

	<div class="espacio-100 row" style="background-color: #edeef0;"></div>

	<div class="row">
		<?php for ($i=1; $i <= 6 ; $i++) { ?>
			<div class="col-md-2 height-450 img-fondos hover-galeria" style="background-image: url('img/galeria/listones/<?php echo $i; ?>-Galeria.png'); height:450px; cursor: pointer;" data-toggle="modal" data-target="#myModal" alt="<?php echo $i ?>">
			</div>
		<?php } ?>
	</div>
	
	<div class="espacio-50"></div>

	<div class="row">
		<?php for ($e=7; $e <= 12 ; $e++) { ?>
			<div class="col-md-2 height-450 img-fondos hover-galeria" style="background-image: url('img/galeria/listones/<?php echo $e; ?>-Galeria.png'); height:450px; cursor: pointer;" data-toggle="modal" data-target="#myModal" alt="<?php echo $e ?>">
		
			</div>
		<?php } ?>
	</div>
	<div class="espacio-50"></div>

	<div class="row">
		<?php for ($dos=13; $dos <= 18 ; $dos++) { ?>
			<div class="col-md-2 height-450 img-fondos hover-galeria" style="background-image: url('img/galeria/listones/<?php echo $dos; ?>-Galeria.png'); height:450px; cursor: pointer;" data-toggle="modal" data-target="#myModal" alt="<?php echo $dos ?>">
		
			</div>
		<?php } ?>
	</div>
	<div class="espacio-50"></div>

	<div class="row">
		<?php for ($tres=19; $tres <= 24 ; $tres++) { ?>
			<div class="col-md-2 height-450 img-fondos hover-galeria" style="background-image: url('img/galeria/listones/<?php echo $tres; ?>-Galeria.png'); height:450px; cursor: pointer;" data-toggle="modal" data-target="#myModal" alt="<?php echo $tres ?>">
		
			</div>
		<?php } ?>
	</div>
	<div class="espacio-50"></div>
	<div class="row">
		<?php for ($cuatro=25; $cuatro <= 30 ; $cuatro++) { ?>
			<div class="col-md-2 height-450 img-fondos hover-galeria" style="background-image: url('img/galeria/listones/<?php echo $cuatro; ?>-Galeria.png'); height:450px; cursor: pointer;" data-toggle="modal" data-target="#myModal" alt="<?php echo $cuatro ?>">
		
			</div>
		<?php } ?>
	</div>

	<div class="espacio-100 row" style="background-color: #edeef0;"></div>

</div>

<script>

	// Dinamismo del Hover
	$('.hover-galeria').hover(function(){
		$(this).css('border','5px solid white');
	},function(){
		$(this).css('border','0px solid black');
	});
	
	// Click  del modal
	$(".hover-galeria").click(function(){ // Modal de la galeria
		
		var img = $(this).attr('alt');

		$("#img-modal").attr('src','img/galeria/amplidas/'+img+'.png');

	})
</script>