<?php

class datosEmpresa
{

    public static function crearEmpresa($RUC, $nombre, $especializacion, $telefono,
        $ciudad, $pais, $cargo, $persona_id)
    {

        $sql = "INSERT INTO T_EMPRESA VALUES ('" . $RUC . "','" . $nombre . "','" . $especializacion .
            "','" . $telefono . "','" . $ciudad . "','" . $pais . "','" . $cargo . "','" . $persona_id .
            "')";

        return self::ejecutarConsulta($sql);
    }

    public static function actualizarEmpresa($RUC, $nombre, $especializacion, $telefono,
        $ciudad, $pais, $cargo, $persona_id)
    {

        $sql = "UPDATE T_EMPRESA SET EMP_NOMBRE='" . $nombre . "',EMP_ESPECIALIDAD='" .
            $especializacion . "',EMP_TELEFONO='" . $telefono . "',EMP_CIUDAD='" . $ciudad .
            "',EMP_PAIS='" . $pais . "',EMP_CARGO='" . $cargo . "',PER_ID='" . $persona_id .
            "' WHERE EMP_RUC='" . $RUC . "'";

        return self::ejecutarConsulta($sql);
    }

    public static function buscarEmpresa($id)
    {

        $sql = "SELECT * FROM vEmpresas WHERE RUC='" . $id . "'";

        return self::ejecutarConsulta($sql);
    }

    public static function buscarEmpresaNombre($nombre)
    {

        $sql = "SELECT * FROM vEmpresas WHERE Nombre LIKE '%" . $nombre . "%'";

        return self::ejecutarConsulta($sql);
    }

    public static function buscarEmpresaRepresentante($id)
    {

        $sql = "SELECT * FROM vEmpresas WHERE 'ID del Representante'='" . $id . "'";

        return self::ejecutarConsulta($sql);
    }

    public static function buscarEmpresaEspecializacion($especializacion)
    {

        $sql = "SELECT * FROM vEmpresas WHERE Especialidad LIKE '%" . $especializacion .
            "%'";

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