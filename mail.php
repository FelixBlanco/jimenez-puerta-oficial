<?php

$n_a = $_POST['n_a']; $email = $_POST['email'];
$telefono = $_POST['telefono']; $mensaje = $_POST['mensaje'];

if (empty($n_a) or empty($email) or empty($telefono) or empty($mensaje)) {
	# Si esta vacio
	setcookie('mensaje_email','false');
	?>
	<script> 
	window.location="http://jimenezpuerta.com/" 
	<?php 
}else{
	
	# No esta vacio

	$para      = 'gestionjuridica@jimenezpuerta.com';
	$titulo    = 'Contacto de la Pagina Web';
	$mensaje   = '
		Nombre y Apellido: '.$n_a.'
		Email: '.$email.' 
		Telefono: '.$telefono.'
		Mensaje: '.$mensaje.'
	';
	$cabeceras = 'From: gestionjuridica@jimenezpuerta.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($para, $titulo, $mensaje, $cabeceras);
	
	setcookie('mensaje_email','true');
	?>
	<script> 
	//window.location="http://jimenezpuerta.com/"
	window.location="http://gestionjuridica@jimenezpuerta.com/" </script>
	<?php

}

?>
