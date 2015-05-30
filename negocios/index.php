
<?php
	include 'negoPersona.php';
	$persona = new NegoPersona;
	$persona->setNombres("nombre");
	echo $persona->getNombres();
	$persona->setApellidos("ap");
	echo $persona->getApellidos();
?>