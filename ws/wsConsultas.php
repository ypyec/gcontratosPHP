<?php
	
	include_once '../negocios/negoArea.php';
    include_once '../negocios/negoContrato.php';
    include_once '../negocios/negoCuentaBanco.php';
    include_once '../negocios/negoEmpresa.php';
    include_once '../negocios/negoEnmienda.php';
    include_once '../negocios/negoPersona.php';
    include_once '../negocios/negoUsuario.php';
$accion = $_POST['accion'];
switch($accion) {
    case 'buscarAreas':
        $area = new negoArea();
        $respuesta = $area->buscarArea();
        break;
    
    case 'buscarProyectos':
        $proyecto = new negoProyecto();
        $respuesta = $proyecto->buscarProyecto();
        break;
    
    case 'buscarEmpresa':
        $ruc = $_POST['ruc'];
        $empresa = new negoEmpresa($ruc);
        $respuesta = $empresa->buscarEmpresa();
        break;
    
    case 'buscarPersona':
        $id = $_POST['idPersona'];
        $persona = new negoPersona($id);
        $respuesta = $persona->buscarPersona();
        break;
    
    case 'buscarContratoProyecto':
        $proyecto = new negoProyecto($_POST['idProyecto']);
        $contrato = new negoContrato();
        $contrato->setProyecto($proyecto);
        $respuesta = $contrato->buscarContratoProyecto();
        break;
    
    case 'buscarContratoNumero':
        $numero = $_POST['numero'];
        $contrato = new negoContrato($numero);
        $respuesta = $contrato->buscarContratoNumero();
        break;
    
    case 'buscarContratoPersona':
        $persona = new negoPersona($_POST['idPersona']);
        $contrato = new negoContrato();
        $contrato->setPersona($persona);
        $respuesta = $contrato->buscarContratoPersona();
        break;
    
    case 'buscarContratoArea':
        $area = new Area($_POST['idArea']);
        $proyecto = new Proyecto();
        $proyecto->setArea($area);
        $contrato = new negoContrato();
        $contrato->setProyecto($proyecto);
        $respuesta = $contrato->buscarContratoProyecto();        
        break;
    
    case 'buscarContratos':
        $contrato = new negoContrato();
        $respuesta = $contrato->buscarContratos();
        break;
    
    case 'buscarEnmiendaContrato':
        $contrato = $_POST['contrato'];
        $enmienda = new negoEnmienda();
        $enmienda->setContrato($contrato);
        $respuesta = $enmienda->datosEnmiendasContrato();
        break;
    
    default:
        $respuesta = "Error no existe la accion especificada";
        break;        
}

echo json_encode($respuesta);