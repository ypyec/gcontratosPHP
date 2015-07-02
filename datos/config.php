<?php

//Database constants
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER') ? null : define("DB_USER", "root");
defined('DB_PASS') ? null : define("DB_PASS", "");
defined('DB_NAME') ? null : define("DB_NAME", "fake_company");

function abrir_conexion()
{
    $conexion = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if ($conexion->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conexion;
}

?>