<?php

class datosProyecto
{

    public static function crearProyecto($nombre, $a_ID)
    {

        $sql = "INSERT INTO T_PROYECTO (PROY_NOMBRE, A_ID) VALUES ('" . $nombre . "','" .
            $a_ID . "')";

        return self::ejecutarConsulta($sql);
    }

    public static function actualizarProyecto($nombre, $a_ID, $proy_ID)
    {

        $sql = "UPDATE T_PROYECTO SET PROY_NOMBRE='" . $nombre . "',A_ID='" . $a_ID .
            "' WHERE PROY_ID='" . $proy_ID . "'";

        self::ejecutarConsulta($sql);
    }

    public static function buscarProyecto($id = null)
    {

        $sql = "SELECT * FROM T_PROYECTO";

        if ($id != null) {

            $sql .= " WHERE PROY_ID='" . $id . "'";
        }

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
            echo "Error en la consulta: " . $conexion->error;
            $conexion->close();
        }
    }
}
?>