<?php

class datosUsuario
{

    public static function crearUsuario($nombre, $mail)
    {

        $sql = "INSERT INTO T_USUARIO (USU_NOMBRE,USU_MAIL) VALUES ('" . $nombre .
            "','" . $mail . "')";

        return self::ejecutarConsulta($sql);
    }

    public static function actualizarUsuario($nombre, $mail, $usuId)
    {

        $sql = "UPDATE T_USUARIO SET USU_NOMBRE='" . $nombre . "', USU_MAIL='" . $mail .
            "' WHERE USU_ID='" . $usuId . "'";

        return self::ejecutarConsulta($sql);
    }

    public static function buscarUsuario($id)
    {

        $sql = "SELECT * FROM T_USUARIO WHERE USU_ID='".$id."'";
        
        return self::ejecutarConsulta($sql);
    }

    private function ejecutarConsulta($sql)
    {

        $conexion = abrir_conexion();
        $resultado = $conexion->query($sql);

        if ($resultado === true) {
            $conexion->close();
            return $resultado;
        } elseif ($conexion->error == "" && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_object())
                $objeto = $fila;
            $conexion->close();
            return $objeto;
        } else {
            return "Error en la consulta: " . $conexion->error;
            $conexion->close();
        }
    }

}
?>