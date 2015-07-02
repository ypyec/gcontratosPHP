<?php

include_once '../datos/config.php';
include_once '../datos/datosEmpresa.php';
include_once 'negoPersona.php';
include_once 'negoCuentaBanco.php';

class NegoEmpresa
{
    private $ruc;
    private $nombre;
    private $especializacion;
    private $telefono;
    private $ciudad;
    private $pais;
    private $cargo;
    private $persona;
    private $idCuentaX;
    private $experienciaX;
    private $direccionX;

    function __construct($ruc = null, $nombre = null, $especializacion = null, $telefono = null,
        $ciudad = null, $pais = null, $cargo = null, $persona = null, $idCuentaX = null,
        $experienciaX = null, $direccionX = null)
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

    public function getRuc()
    {
        return $this->ruc;
    }
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getEspecializacion()
    {
        return $this->especializacion;
    }
    public function setEspecializacion($especializacion)
    {
        $this->especializacion = $especializacion;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function setPais($pais)
    {
        $this->pais = $pais;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }
    public function getPersona()
    {
        return $this->persona->getId();
    }
    public function setPersona($persona)
    {
        $this->persona = $persona;
    }
    public function getIdCuentaX()
    {
        return $this->idCuentaX;
    }
    public function setIdCuentaX($idCuentaX)
    {
        $this->idCuentaX = $idCuentaX;
    }
    public function getExperienciaX()
    {
        return $this->experienciaX;
    }
    public function setExperienciaX($experienciaX)
    {
        $this->experienciaX = $experienciaX;
    }
    public function getDireccionX()
    {
        return $this->direccionX;
    }
    public function setDireccionX($direccionX)
    {
        $this->direccionX = $direccionX;
    }

    public function crearEmpresa()
    {

        return datosEmpresa::crearEmpresa($this->ruc, $this->nombre, $this->
            especializacion, $this->telefono, $this->ciudad, $this->pais, $this->cargo, $this->
            persona);
    }

    public function actualizarEmpresa()
    {

        return datosEmpresa::actualizarEmpresa($this->ruc, $this->nombre, $this->
            especializacion, $this->telefono, $this->ciudad, $this->pais, $this->cargo, $this->
            persona->getId());
    }

    public function buscarEmpresa()
    {

        if ($this->ruc == null)
            return "El RUC de la empresa esta vacio";
        else
            return datosEmpresa::buscarEmpresa($this->ruc);
    }

    public function buscarEmpresaNombre()
    {

        if ($this->nombre == null)
            return "El nombre de la empresa esta vacio";
        else
            return datosEmpresa::buscarEmpresaNombre($this->persona);
    }

    public function buscarEmpresaRepresentante()
    {

        if ($this->persona == null)
            return "El id de la persona esta vacio";
        else
            return datosEmpresa::buscarEmpresaRepresentante($this->persona);
    }

    public function buscarEmpresaEspecializacion()
    {

        if ($this->especializacion == null)
            return "La especializacion de la empresa esta vacia";
        else
            return datosEmpresa::buscarEmpresaEspecializacion($this->especializacion);
    }
}

?>
