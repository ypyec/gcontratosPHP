<?php
include_once "config.php";

class datosArea {
    
    public static function crearArea($nombre) {
        
        $sql = "INSERT INTO T_AREA(A_NOMBRE) VALUES ('".$nombre."')";
        
        self::ejecutarConsulta($sql);
    }
    
    public static function buscarArea($id=null) {
     
        $sql = "SELECT * FROM T_AREA";
        
        if($id != null) {
            
            $sql .= " WHERE A_ID='".$id."'";
        }
        
        return self::ejecutarConsulta($sql);
    }
    
    private function ejecutarConsulta($sql){
        
        $conexion = abrir_conexion(); 
        $resultado = $conexion->query($sql);
        
        if($resultado === true ){
            $conexion->close();
            return $resultado;
        }elseif($conexion->error == "" && $resultado->num_rows > 0){
            while($fila = $resultado->fetch_object())
                $objeto = $fila;
            $conexion->close();
            return $objeto;
        }else{
            echo "Error en la consulta: " . $conexion->error;
            $conexion->close();
        }
    }
}
?>