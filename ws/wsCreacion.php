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
    
    case 'crearArea':
        $id = isset($_POST['idArea'])?$_POST['id']:null;
        $nombre = $_POST['nombreArea'];
        $area = new negoArea($id,$nombre);
        $respuesta = $area->crearArea();
        break;
    
    case 'crearContrato':
    //cambiar a isset para comprobar q me llegan los posts
        $parametroEmpresa = new Empresa($_POST['ruc'],$_POST['nombreEmpresa'],$_POST['especializacionEmpresa'],$_POST['telefonoEmpresa'],$_POST['ciudadEmpresa'],$_POST['paisEmpresa'],$_POST['cargoEmpresa'],$_POST['persona'],$_POST['idCuentaXEmpresa'],$_POST['experienciaXEmpresa'],$_POST['direccionXEmpresa']);
        //cambiar a isset los datos que no son necesarios desde [Profesion]
        $parametroPersona = new negoPersona($_POST['idPersona'],$_POST['nombresPersona'],$_POST['apellidosPersona'],$_POST['profesionPersona'],$_POST['telefonoPersona'],$_POST['ciudadPersona'],$_POST['paisPersona'],$_POST['cargoPersona'],$_POST['idCuentaXPersona'],$_POST['experienciaXPersona'],$_POST['direccionXPersona']);
    
        $parametroProyecto = new negoProyecto($_POST['id'],$_POST['nombreProyecto'],$_POST['area']);
    
        $parametroUsuario = new negoUsuario($_POST['id'],$_POST['nombreArea'],$_POST['email']);
    
        $numero = $_POST['numero'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $consultoria = $_POST['consultoria'];
        $monto = $_POST['monto'];
        $pais = $_POST['paisContrato'];
        $fechaFirma = $_POST['fechaFirma'];
        $link = $_POST['link'];
        $usuario = $parametroUsuario;
        $persona = $parametroPersona;
        $empresa = $parametroEmpresa;
        $proyecto = $parametroProyecto;
        $descripcionX = $_POST['descripcionX'];
        $obligacionesAdicionalesX = $_POST['obligacionesAdicionalesX'];
        $IVAX = $_POST['IVAX'];
        $IRX = $_POST['IRX'];
        $gastosX = $_POST['gastosX'];
        $formaPagoX = $_POST['formaPagoX'];
        $fechaElaboracionX = $_POST['fechaElaboracionX'];
        $duracionX = $_POST['duracionX'];
        $contrato = new negoContrato($numero,$fechaInicio,$fechaFin,$consultoria,$monto,$pais,$fechaFirma,$link,$parametroUsuario,$parametroPersona,$parametroEmpresa,$parametroProyecto,$descripcionX,$obligacionesAdicionalesX,$IVAX,$IRX,$gastosX,$formaPagoX,$fechaElaboracionX,$duracionX);
        $respuesta = $contrato->crearContrato();
        break;
    
    case 'crearEmpresa':
        $parametroPersona = new negoPersona($_POST['id'],$_POST['nombres'],$_POST['apellidos'],$_POST['profesion'],$_POST['telefonoPersona'],$_POST['ciudadPersona'],$_POST['paisPersona'],$_POST['cargoPersona'],$_POST['idCuentaXPersona'],$_POST['experienciaXPersona'],$_POST['direccionXPersona']);
    
        $ruc = $_POST['ruc'];
        $nombre = $_POST['nombre'];
        $especializacion = $_POST['especializacion'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $cargo = $_POST['cargo'];
        $persona = $parametroPersona;
        $idCuentaX = $_POST['idCuentaXEmpresa'];
        $experienciaX = $_POST['experienciaXEmpresa'];
        $direccionX = $_POST['direccionXEmpresa'];
        $empresa = new negoEmpresa($ruc,$nombre,$especializacion,$telefono,$ciudad,$pais,$cargo,$persona,$idCuentaX,$experienciaX,$direccionX);
        $respuesta = $empresa->crearEmpresa();
        break;
    
    case 'actualizarEmpresa':
        $ruc = $_POST['ruc'];
        $nombre = $_POST['nombre'];
        $especializacion = $_POST['especializacion'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $cargo = $_POST['cargo'];
        $persona = $_POST['persona'];
        $idCuentaX = $_POST['idCuentaX'];
        $experienciaX = $_POST['experienciaX'];
        $direccionX = $_POST['direccionX'];
        $empresa = new negoEmpresa($ruc,$nombre,$especializacion,$telefono,$ciudad,$pais,$cargo,$persona,$idCuentaX,$experienciaX,$direccionX);
        $respuesta = $empresa->actualizarEmpresa();
        break;
    
    case 'crearEnmienda':
        $parametroUsuario = new negoUsuario($_POST['id'],$_POST['nombreArea'],$_POST['email']);
    
        $id = $_POST['id'];
        $numero = $_POST['numero'];
        $fechaFin = $_POST['fechaFin'];
        $consultoria = $_POST['consultoria'];
        $monto = $_POST['monto'];
        $link = $_POST['link'];
        $usuario = $parametroUsuario;
        $contrato = $_POST['contrato'];
        $descripcionX = $_POST['descripcionX'];
        $IVAX = $_POST['IVAX'];
        $IRX = $_POST['IRX'];
        $gastosX = $_POST['gastosX'];
        $formaPagoX = $_POST['formaPagoX'];
        $fechaElaboracionX = $_POST['fechaElaboracionX'];
        $enmienda = new negoEnmienda($id,$numero,$fechaFin,$consultoria,$monto,$link,$usuario,$contrato,$descripcionX,$IVAX,$IRX,$gastosX,$formaPagoX,$fechaElaboracionX);
        $respuesta = $enmienda->crearEnmienda();
        break;
    
    case 'crearPersona':
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $profesion = $_POST['profesion'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $cargo = $_POST['cargo'];
        $idCuentaX = $_POST['idCuentaX'];
        $experienciaX = $_POST['experienciaX'];
        $direccionX = $_POST['direccionX'];
        $persona = new negoPersona($id,$nombres,$apellidos,$profesion,$telefono,$ciudad,$pais,$cargo,$idCuentaX,$experienciaX,$direccionX);
        $respuesta = $persona->crearPersona();
        break;
    
    case 'actualizarPersona':
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $profesion = $_POST['profesion'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $cargo = $_POST['cargo'];
        $idCuentaX = $_POST['idCuentaX'];
        $experienciaX = $_POST['experienciaX'];
        $direccionX = $_POST['direccionX'];
        $persona = new negoPersona($id,$nombres,$apellidos,$profesion,$telefono,$ciudad,$pais,$cargo,$idCuentaX,$experienciaX,$direccionX);
        $respuesta = $persona->actualizarPersona();
        break;
    
    case 'crearProyecto':
        $parametroArea = new negoArea($_POST['id'],$_POST['nombre']);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $area = $_POST['area'];
        $proyecto = new negoProyecto($id,$nombre,$area);
        $respuesta = $proyecto->crearProyecto();
        break;
    
    case 'actualizarProyecto':
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $area = $_POST['area'];
        $proyecto = new negoProyecto($id,$nombre,$area);
        $respuesta = $proyecto->actualizarProyecto();
        break;
    
    case 'crearUsuario':
        $id = $_POST['id'];
        $nombre = $_POST['id'];
        $email = $_POST['id'];
        $usuario = new negoUsuario($id,$nombre,$email);
        $respuesta = $usuario->crearUsuario();
        break;
    
    case 'actualizarUsuario':
    
        $id = $_POST['id'];
        $nombre = $_POST['id'];
        $email = $_POST['id'];
        $usuario = new negoUsuario($id,$nombre,$email);
        $respuesta = $usuario->actualizarUsuario();
        break;
    
    default:
        $respuesta = "Error no existe la accion especificada";
        break;        
}

echo json_encode($respuesta);