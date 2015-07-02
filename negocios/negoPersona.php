<?php

include_once '../datos/config.php';
include_once '../datos/datosPersona.php';
include_once 'negoCuentaBanco.php';

class NegoPersona
{
    private $id;
    private $nombres;
    private $apellidos;
    private $profesion;
    private $telefono;
    private $ciudad;
    private $pais;
    private $cargo;
    private $idCuentaX;
    private $experienciaX;
    private $direccionX;

    function __construct($id = null, $nombres = null, $apellidos = null, $profesion = null,
        $telefono = null, $ciudad = null, $pais = null, $cargo = null, $idCuentaX = null,
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

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNombres()
    {
        return $this->nombres;
    }
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function getProfesion()
    {
        return $this->profesion;
    }
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;
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

    public function crearPersona()
    {

        return datosPersona::crearPersona($this->id, $this->nombres, $this->apellidos, $this->
            profesion, $this->telefono, $this->ciudad, $this->pais, $this->cargo);
    }

    public function actualizarPersona()
    {

        return datosPersona::actualizarPersona($this->id, $this->nombres, $this->
            apellidos, $this->profesion, $this->telefono, $this->ciudad, $this->pais, $this->
            cargo);
    }

    public function buscarPersona()
    {

        if ($this->id == null)
            return "El id de la persona esta vacio";
        else
            return datosPersona::buscarPersona($this->id);
    }

}

?>
