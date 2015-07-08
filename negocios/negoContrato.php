<?php

include_once '../datos/config.php';
include_once '../datos/datosContrato.php';
include_once 'negoPersona.php';
include_once 'negoEmpresa.php';
include_once 'negoProyecto.php';
include_once 'negoUsuario.php';
include_once 'PDF.php';

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
        return $this->persona;
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
        $this->numero = datosContrato::ultimoContrato()[0]->CON_NUMERO + 1;
        $object = (object) ['numeroContrato' => null, 'link' => null];
        $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $link = str_replace('ws/wsCreacion.php',"pdf/contrato-$this->numero.pdf", $link);
        if (!is_array($this->persona->buscarPersona()))
            $this->persona->crearPersona();
        if (!is_null($this->empresa) && !is_array($this->empresa->buscarEmpresa()))
            $this->empresa->crearEmpresa();
        if (!is_array($this->proyecto->buscarProyectos()))
            $this->proyecto->crearProyecto();
        if (!is_array($this->usuario->buscarUsuario()))
            $this->usuario->crearUsuario();
        $contrato = datosContrato::crearContrato($this->fechaInicio, $this->fechaFin, $this->
            consultoria, $this->monto, $this->pais, $this->usuario->getId(), $this->persona->
            getId(), $this->proyecto->getId(), $this->fechaFirma, is_null($this->empresa) ? null :
            $this->empresa->getRuc(), $link);

        if ($contrato)
        {
            $object->numeroContrato = $this->numero;
            $object->link = $link;
            $pdf = new PDF();
            $pdf->ImprimirPDF($this->numero, 'Persona', $this->persona->getNombres(), $this->
                persona->getApellidos(), $this->persona->getId(), $this->persona->getProfesion(),
                $this->persona->getExperienciaX(), $this->getConsultoria(), $this->
                getDescripcionX(), $this->getObligacionesAdicionalesX(), $this->getDuracionX(),
                $this->fechaInicio, $this->fechaFin, $this->monto, $this->IVAX, $this->IRX, $this->
                pais, $this->gastosX, $this->formaPagoX, is_null($this->persona->getIdCuentaX()) ? null :
                $this->persona->getIdCuentaX()->getNombreBanco(), is_null($this->persona->
                getIdCuentaX()) ? null : $this->persona->getIdCuentaX()->getNumero(), is_null($this->
                persona->getIdCuentaX()) ? null : $this->persona->getIdCuentaX()->getTipo(),
                is_null($this->persona->getIdCuentaX()) ? null : $this->persona->getIdCuentaX()->
                getSwift(), $this->persona->getDireccionX(), $this->persona->getCiudad(), $this->
                persona->getPais(), $this->fechaFirma, $this->proyecto->getArea()->buscarArea()[0]->
                A_NOMBRE, $this->proyecto->getNombre(), $this->usuario->getNombre(), $this->
                getFechaElaboracionX());
            $pdf->Output("../pdf/contrato-$this->numero.pdf", 'F');
        }

        return $object;
    }

    public function buscarContratoProyecto()
    {

        if ($this->proyecto == null)
            return "El nombre del proyecto esta vacio";
        else
            return datosContrato::buscarContratoProyecto($this->proyecto->getId());
    }

    public function buscarContratoNumero()
    {

        if ($this->numero == null)
            return "El numero de contrato esta vacio";
        else
            return datosContrato::buscarContratoNumero($this->numero);
    }

    public function buscarContratoPersona()
    {

        if ($this->persona->getId() == null)
            return "El id de la persona esta vacio";
        else
            return datosContrato::buscarContratoPersona($this->persona->getId());
    }

    public function buscarContratos()
    {

        return datosContrato::buscarContratos();
    }
}

?>
