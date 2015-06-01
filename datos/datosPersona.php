<?php
include_once "config.php";

class datosPersona {
    
    public static function crearPersona($id, $nombres, $apellidos, $profesion, $telefono, $ciudad, $pais, $cargo) {

        $sql = "INSERT INTO T_PERSONA VALUES ('".$id."','".$nombres."','".$apellidos."','".$profesion."','".$telefono."','".$ciudad."','".$pais."','".$cargo."')"; 
        
        self::ejecutarConsulta($sql);
    }
    
    public static function actualizarPersona($id, $nombres, $apellidos, $profesion, $telefono, $ciudad, $pais, $cargo){
        
        $sql = "UPDATE T_PERSONA SET PER_NOMBRE='".$nombres."',PER_APELLIDO='".$apellidos."',PER_PROFESION='".$profesion."',PER_TELEFONO='".$telefono."',PER_CIUDAD='".$ciudad."',PER_PAIS='".$pais."',PER_CARGO='".$cargo."' WHERE PER_ID='".$id."'";
        
        self::ejecutarConsulta($sql);
    }
    
    public static function buscarPersona($id) {
        
        $sql = "SELECT * FROM T_PERSONA WHERE PER_ID='".$id."'";
        
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