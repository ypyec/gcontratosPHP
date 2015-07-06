<?php

class datosContrato
{

    public static function crearContrato($fechaInicio, $fechaFin, $consultoria, $monto,
        $pais, $usu_id, $per_ID, $proy_ID, $fechaFirma, $emp_ruc = null, $link = null)
    {

        $sql = "INSERT INTO T_CONTRATO (CON_FECHA_INI, CON_FECHA_FIN, CON_CONSULTORIA, CON_MONTO, CON_PAIS, USU_ID, EMP_RUC, PER_ID, PROY_ID, CON_LINK, CON_FECHA_FIRMA) VALUES ('" .
            $fechaInicio . "','" . $fechaFin . "','" . $consultoria . "','" . $monto . "','" .
            $pais . "','" . $usu_id . "'," . (($emp_ruc == null) ? 'null' : "'" . $emp_ruc .
            "'") . ",'" . $per_ID . "','" . $proy_ID . "'," . (($link == null) ? 'null' :
            "'" . $link . "'") . ",'" . $fechaFirma . "')";

        return self::ejecutarConsulta($sql);
    }

    public static function calificarContrato($calificacion, $idContrato)
    {

        $sql = "UPDATE T_CONTRATO SET CON_CALIFICACION='" . $calificacion .
            "' WHERE CON_NUMERO='" . $idContrato . "'";
    }

    public static function buscarContratoProyecto($proyecto)
    {

        $sql = "SELECT * FROM vContratoCompleta WHERE Proyecto = '" . $proyecto . "'";

        return self::ejecutarConsulta($sql);
    }

    public static function buscarContratoNumero($numero)
    {

        $sql = "SELECT * FROM vContratoCompleta WHERE `Numero de contrato`='" . $numero .
            "'";
        echo $sql;
        return self::ejecutarConsulta($sql);
    }

    public static function buscarContratoPersona($id_persona)
    {

        $sql = "SELECT * FROM vContratoCompleta WHERE 'ID Contratista'='" . $id_persona .
            "'";

        return self::ejecutarConsulta($sql);
    }

    public static function buscarContratos()
    {

        $sql = "SELECT * FROM vContratoCompleta";

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