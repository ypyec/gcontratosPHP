
<?php
	include_once 'negoPersona.php';
	include_once 'negoEmpresa.php';
	$persona = new NegoPersona();
	$persona->setNombres("nombre");
	$empresa = new NegoEmpresa();
	$empresa->setNombre("empresa");
	$empresa->setPersona($persona);
	echo "asd<br/>";
	echo json_encode($empresa)."<br>";
	echo json_encode($empresa->getPersona());
	echo $empresa->getPersona()->getNombres();
	
?>