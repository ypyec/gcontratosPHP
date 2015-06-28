
<?php
include_once '../datos/datosPersona.php';
include_once 'negoPersona.php';
$persona = new NegoPersona(1721531950);
echo json_encode($persona->buscarPersona());

	
?>