<?php

include_once '../negocios/negoArea.php';
include_once '../negocios/negoContrato.php';
include_once '../negocios/negoCuentaBanco.php';
include_once '../negocios/negoEmpresa.php';
include_once '../negocios/negoEnmienda.php';
include_once '../negocios/negoPersona.php';
include_once '../negocios/negoUsuario.php';
foreach ($_POST as $key => $value)
    ${$key} = $value;
switch ($accion)
{

    case 'crearArea':
        $area = new negoArea($idArea, $nombreArea);
        $respuesta = $area->crearArea();
        break;

    case 'crearContratoPersona':
        $parametroPersona = new negoPersona($idPersona, $nombresPersona, $apellidosPersona,
            $profesionPersona, $telefonoPersona, $ciudadPersona, $paisPersona, $cargoPersona,
            $idCuentaXPersona, $experienciaXPersona, $direccionXPersona);

        $parametroProyecto = new negoProyecto($idProyecto, $nombreProyecto, $idArea);

        $parametroUsuario = new negoUsuario($idUsuario, $nombreArea, $emailUsuario);

        $contrato = new negoContrato($numeroContrato, $fechaInicioContrato, $fechaFinContrato,
            $consultoriaContrato, $montoContrato, $paisContrato, $fechaFirmaContrato, $link,
            $parametroUsuario, $parametroPersona, $parametroEmpresa, $parametroProyecto, $descripcionXContrato,
            $obligacionesAdicionalesXContrato, $IVAXContrato, $IRXContrato, $gastosXContrato,
            $formaPagoXContrato, $fechaElaboracionXContrato, $duracionXContrato);
        $respuesta = $contrato->crearContrato();
        break;

    case 'crearContratoEmpresa':
        $parametroPersona = new negoPersona($idPersona, $nombresPersona, $apellidosPersona,
            $profesionPersona, $telefonoPersona, $ciudadPersona, $paisPersona, $cargoPersona,
            $idCuentaXPersona, $experienciaXPersona, $direccionXPersona);

        $parametroEmpresa = new Empresa($rucEmpresa, $nombreEmpresa, $especializacionEmpresa,
            $telefonoEmpresa, $ciudadEmpresa, $paisEmpresa, $cargoEmpresa, $parametroPersona,
            $idCuentaXEmpresa, $experienciaXEmpresa, $direccionXEmpresa);

        $parametroProyecto = new negoProyecto($idProyecto, $nombreProyecto, $idArea);

        $parametroUsuario = new negoUsuario($idUsuario, $nombreUsuario, $emailUsuario);

        $contrato = new negoContrato($numeroContrato, $fechaInicioContrato, $fechaFinContrato,
            $consultoriaContrato, $montoContrato, $paisContrato, $fechaFirmaContrato, $link,
            $parametroUsuario, $parametroPersona, $parametroEmpresa, $parametroProyecto, $descripcionXContrato,
            $obligacionesAdicionalesXContrato, $IVAXContrato, $IRXContrato, $gastosXContrato,
            $formaPagoXContrato, $fechaElaboracionXContrato, $duracionXContrato);
        $respuesta = $contrato->crearContrato();
        break;

    case 'crearEmpresa':
        $parametroPersona = new negoPersona($idPersona, $nombresPersona, $apellidosPersona,
            $profesionPersona, $telefonoPersona, $ciudadPersona, $paisPersona, $cargoPersona,
            $idCuentaXPersona, $experienciaXPersona, $direccionXPersona);

        $empresa = new negoEmpresa($ruc, $nombreEmpresa, $especializacionEmpresa, $telefonoEmpresa,
            $ciudadEmpresa, $paisEmpresa, $cargoEmpresa, $parametroPersona, $idCuentaXEmpresa,
            $experienciaXEmpresa, $direccionXEmpresa);
        $respuesta = $empresa->crearEmpresa();
        break;

    case 'actualizarEmpresa':
        $parametroPersona = new NegoPersona($idPersona, $nombresPersona, $apellidosPersona,
            $profesionPersona, $telefonoPersona, $ciudadPersona, $paisPersona, $cargoPersona,
            $idCuentaXPersona, $experienciaXPersona, $direccionXPersona);

        $empresa = new negoEmpresa($rucEmpresa, $nombreEmpresa, $especializacionEmpresa,
            $telefonoEmpresa, $ciudadEmpresa, $paisEmpresa, $cargoEmpresa, $parametroPersona,
            $idCuentaXEmpresa, $experienciaXEmpresa, $direccionXEmpresa);
        $respuesta = $empresa->actualizarEmpresa();
        break;

    case 'crearEnmienda':
        $parametroUsuario = new negoUsuario($idUsuario, $nombreArea, $emailUsuario);

        $enmienda = new negoEnmienda($idEnmienda, $numeroEnmienda, $fechaFinEnmienda, $consultoriaEnmienda,
            $montoEnmienda, $link, $parametroUsuario, $contratoEnmienda, $descripcionXEnmienda,
            $IVAXEnmienda, $IRXEnmienda, $gastosXEnmienda, $formaPagoXEnmienda, $fechaElaboracionXEnmienda);
        $respuesta = $enmienda->crearEnmienda();
        break;

    case 'crearPersona':
        $persona = new negoPersona($idPersona, $nombresPersona, $apellidosPersona, $profesionPersona,
            $telefonoPersona, $ciudadPersona, $paisPersona, $cargoPersona, $idCuentaXPersona,
            $experienciaXPersona, $direccionXPersona);
        $respuesta = $persona->crearPersona();
        break;

    case 'actualizarPersona':
        $persona = new negoPersona($idPersona, $nombresPersona, $apellidosPersona, $profesionPersona,
            $telefonoPersona, $ciudadPersona, $paisPersona, $cargoPersona, $idCuentaXPersona,
            $experienciaXPersona, $direccionXPersona);
        $respuesta = $persona->actualizarPersona();
        break;

    case 'crearProyecto':
        $parametroArea = new negoArea($idArea, $nombreArea);
        $proyecto = new negoProyecto($idProyecto, $nombreProyecto, $parametroArea);
        $respuesta = $proyecto->crearProyecto();
        break;

    case 'actualizarProyecto':
        $proyecto = new negoProyecto($idProyecto, $nombreProyecto, $idArea);
        $respuesta = $proyecto->actualizarProyecto();
        break;

    case 'crearUsuario':
        $usuario = new negoUsuario($idUsuario, $nombreUsuario, $emailUsuario);
        $respuesta = $usuario->crearUsuario();
        break;

    case 'actualizarUsuario':
        $usuario = new negoUsuario($idUsuario, $nombreUsuario, $emailUsuario);
        $respuesta = $usuario->actualizarUsuario();
        break;

    default:
        $respuesta = "Error no existe la accion especificada";
        break;
}

echo json_encode($respuesta);
