<?php

class datosEnmienda
{

    public static function crearEnmienda($numero, $fechaFin, $consultoria, $monto, $fechaFirma,
        $usu_ID, $con_Numero, $link = null)
    {

        $sql = "INSERT INTO T_ENMIENDA (ENM_NUMERO, ENM_FECHA_FIN, ENM_CONSULTORIA, ENM_MONTO, ENM_FECHA_FIRMA, USU_ID, CON_ID, ENM_LINK) VALUES ('" .
            $numero . "','" . $fechaFin . "','" . $consultoria . "','" . $monto . "','" . $fechaFirma .
            "','" . $usu_ID . "','" . $con_Numero . "','" . (($link == null) ? 'null' : "'" .
            $link . "'") . "')";

        return self::ejecutarConsulta($sql);
    }

    public static function totalEnmiendas($con_Numero)
    {

        $sql = "SELECT count(ENM_NUMERO) as 'Numero de Enmiendas' FROM T_ENMIENDA WHERE CON_NUMERO = '" .
            $con_Numero . "'";

        return self::ejecutarConsulta($sql);
    }

    public static function datosEnmiendasContrato($con_Numero)
    {

        $sql = "SELECT * FROM vEnmiendaCompleta WHERE 'Numero de Contrato' = '" . $con_Numero .
            "'";

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