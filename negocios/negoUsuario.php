<?php

include_once '../datos/config.php';
include_once '../datos/datosUsuario.php';

class NegoUsuario
{
    private $id;
    private $nombre;
    private $email;

    function __construct($id = null, $nombre = null, $email = null)
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
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function crearUsuario()
    {

        return datosUsuario::crearUsuario($this->nombre, $this->email);
    }

    public function actualizarUsuario()
    {

        return datosUsuario::actualizarUsuario($this->nombre, $this->email, $this->id);
    }
    public function buscarUsuario()
    {

        return datosUsuario::buscarUsuario($this->id);
    }
}

?>
