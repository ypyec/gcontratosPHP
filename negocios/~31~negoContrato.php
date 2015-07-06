<?php

include_once '../datos/config.php';
include_once '../datos/datosContrato.php';
include_once 'negoPersona.php';
include_once 'negoEmpresa.php';
include_once 'negoProyecto.php';
include_once 'negoUsuario.php';

class NegoContrato
{
    private $numero;
    private $fechaInicio;
    private $fechaFin;
    private $consultoria;
    private $monto;
    private $pais;
    private $fechaFirma;
    private $link;
    private $usuario;
    private $persona;
    private $empresa;
    private $proyecto;
    private $descripcionX;
    private $obligacionesAdicionalesX =
        "Las demas especificadas en los Terminos de Referencia";
    private $IVAX;
    private $IRX;
    private $gastosX;
    private $formaPagoX;
    private $fechaElaboracionX;
    private $duracionX;

    function __construct($numero = null, $fechaInicio = null, $fechaFin = null, $consultoria = null,
        $monto = null, $pais = null, $fechaFirma = null, $link = null, $usuario = null,
        $persona = null, $empresa = null, $proyecto = null, $descripcionX = null, $obligacionesAdicionalesX = null,
        $IVAX = null, $IRX = null, $gastosX = null, $formaPagoX = null, $fechaElaboracionX = null,
        $duracionX = null)
    {
        $parametros = get_defined_vars();
        $variables = get_class_vars(__class__);

        foreach ($parametros as $nombre_parametro => $valor)
        {
            foreach ($variables as $nombre_variable => $default)
            {
                if ($nombre_variable == $nombre_parametro)
                {
                    $this->$nombre_variable = $valor;
                    break;
                }
            }

        }
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }
    public function getFechaFin()
    {
        return $this->fechaFin;
    }
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }
    public function getConsultoria()
    {
        return $this->consultoria;
    }
    public function setConsultoria($consultoria)
    {
        $this->consultoria = $consultoria;
    }
    public function getMonto()
    {
        return $this->monto;
    }
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function setPais($pais)
    {
        $this->pais = $pais;
    }
    public function getFechaFirma()
    {
        return $this->fechaFirma;
    }
    public function setFechaFirma($fechaFirma)
    {
        $this->fechaFirma = $fechaFirma;
    }
    public function getLink()
    {
        return $this->link;
    }
    public function setLink($link)
    {
        $this->link = $link;
    }
    public function getUsuario()
    {
        return $this->usuario->getId();
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function getPersona()
    {
        return $this->persona->getId();
    }
    public function setPersona($persona)
    {
        $this->persona = $persona;
    }
    public function getEmpresa()
    {
        return $this->empresa->getRuc();
    }
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }
    public function getProyecto()
    {
        return $this->proyecto->getId();
    }
    public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;
    }
    public function getDescripcionX()
    {
        return $this->descripcionX;
    }
    public function setDescripcionX($descripcionX)
    {
        $this->descripcionX = $descripcionX;
    }
    public function getObligacionesAdicionalesX()
    {
        return $this->obligacionesAdicionalesX;
    }
    public function setObligacionesAdicionalesX($obligacionesAdicionalesX)
    {
        $this->obligacionesAdicionalesX = $obligacionesAdicionalesX;
    }
    public function getIVAX()
    {
        return $this->IVAX;
    }
    public function setIVAX($IVAX)
    {
        $this->IVAX = $IVAX;
    }
    public function getIRX()
    {
        return $this->IRX;
    }
    public function setIRX($IRX)
    {
        $this->IRX = $IRX;
    }
    public function getGastosX()
    {
        return $this->gastosX;
    }
    public function setGastosX($gastosX)
    {
        $this->gastosX = $gastosX;
    }
    public function getFormaPagoX()
    {
        return $this->formaPagoX;
    }
    public function setFormaPagoX($formaPagoX)
    {
        $this->formaPagoX = $formaPagoX;
    }
    public function getFechaElaboracionX()
    {
        return $this->fechaElaboracionX;
    }
    public function setFechaElaboracionX($fechaElaboracionX)
    {
        $this->fechaElaboracionX = $fechaElaboracionX;
    }
    public function getDuracionX()
    {
        return $this->duracionX;
    }
    public function setDuracionX($duracionX)
    {
        $this->duracionX = $duracionX;
    }
    public function crearContrato()
    {
        if (!is_object($this->persona->buscarPersona()))
            $this->persona->crearPersona();
        if (!is_null($this->empresa) && !is_object($this->empresa->buscarEmpresa()))
            $this->empresa->crearEmpresa();
        if (!is_object($this->proyecto->buscarProyectos()))
            $this->proyecto->crearProyecto();
        if (!is_object($this->usuario->buscarUsuario()))
            $this->usuario->crearUsuario();

        return datosContrato::crearContrato($this->fechaInicio, $this->fecchaFin, $this->
            fechaFin, $this->consultoria, $this->monto, $this->pais, $this->usuario->getId(),
            $this->persona->getId(), $this->proyecto->getId(), $this->fechaFirma, $this->
            empresa->getRuc(), $this->link);
    }

    public function buscarContratoProyecto()
    {

        if ($this->proyecto == null)
            return "El nombre del proyecto esta vacio";
        else
            return datosContrato::buscarContratoProyecto($this->proyecto);
    }

    public function buscarContratoNumero()
    {
echo $this->numero
        if ($this->numero == null)
            return "El numero de contrato esta vacio";
        else
            return datosContrato::buscarContratoNumero($this->numero);
    }

    public function buscarContratoPersona()
    {

        if ($this->persona->getId == null)
            return "El id de la persona esta vacio";
        else
            return datosContrato::buscarContratoPersona($this->persona);
    }

    public function buscarContratos()
    {

        return datosContrato::buscarContratos();
    }
}

$contrato = new NegoContrato(2);
echo $contrato->buscarContratoNumero();
?>
