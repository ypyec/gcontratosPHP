<?php

class NegoCuentaBanco
{
    private $numero;
    private $nombreBanco;
    private $tipo = "N/A";
    private $swift = "N/A";

    function __construct($numero = null, $nombreBanco = null, $tipo = null, $swift = null)
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
    public function setId($numero)
    {
        $this->numero = $numero;
    }
    public function getNombreBanco()
    {
        return $this->nombreBanco;
    }
    public function setNombreBanco($nombreBanco)
    {
        $this->nombreBanco = $nombreBanco;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getSwift()
    {
        return $this->swift;
    }
    public function setSwift($swift)
    {
        $this->swift = $swift;
    }
}

?>
