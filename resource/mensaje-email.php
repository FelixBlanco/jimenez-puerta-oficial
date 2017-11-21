<?php 

// Mensaje de Envio de Email


if (isset($_COOKIE['mensaje_email '])) {
	
	# Si Existe
	if($_COOKIE['mensaje_email'] == 'true'){ 
	setcookie("mensaje_email", 'true', time()-1000);
	
	?>
		<!--Mensaje -->
		<div class="alert alert-success alert-dismissable">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Perfecto</strong> Se envio correctamente.
		</div>

	<?php 

	}elseif($_COOKIE['mensaje_email'] == 'false'){ 
		setcookie("mensaje_email", 'false', time()-1000);

	?>
	
		<div class="alert alert-danger alert-dismissable">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Lo siento</strong> ocurrio un error vuelta a intentar.
		</div>
	
	<?php
	} // end if
}else{
	# No existe no mostramos nada
}

?>