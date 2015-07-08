<?php

include_once '../datos/config.php';
include_once '../datos/datosProyecto.php';
include_once 'negoArea.php';

class NegoProyecto
{
    private $id;
    private $nombre;
    private $area;

    function __construct($id = null, $nombre = null, $area = null)
    {
        $proyecto = $this->buscarProyectos($id);
        if(!is_array($proyecto)){

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
        }else{
            foreach(get_object_vars($proyecto[0]) as $campo => $valor)
            echo $campo;
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
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getArea()
    {
        return $this->area->getId();
    }
    public function setArea($area)
    {
        $this->area = $area;
    }

    public function crearProyecto()
    {
        if (!is_array($this->area->buscarArea()))
            $this->area->crearArea();
        return datosProyecto::crearProyecto($this->nombre, $this->area->getId());
    }

    public function actualizarProyecto()
    {

        return datosProyecto::actualizarProyecto($this->nombre, $this->area->getId(), $this->
            id);
    }

    public function buscarProyectos()
    {

        return datosProyecto::buscarProyecto($this->id);
    }
}
$proyecto = new NegoProyecto(1);

?>
