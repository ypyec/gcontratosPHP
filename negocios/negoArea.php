<?php
    include_once '../datos/config.php';
	include_once '../datos/datosArea.php';

	class NegoArea{
		private $id;
		private $nombre;

		function __construct($id=null,$nombre=null){

			$parametros = get_defined_vars();
			$variables = get_class_vars(__CLASS__);

			foreach ($parametros as $nombre_parametro => $valor) {
				if($valor == null)
					break;
				else{
					foreach ($variables as $nombre_variable => $default) {				
						if($nombre_variable==$nombre_parametro){
							$this->$nombre_variable = $valor;
							break;
						}
					}
				}
			}			
		}
	    
	    public function getId(){
	        return $this->id;
	    }
		public function setId($id){
			$this->id = $id;
		}
	    public function getNombre(){
	        return $this->nombre;
	    }
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function crearArea(){
            if($this->nombre == null)
                return "El nombre del Area esta vacío";
            else
                return datosArea::crearArea($this->nombre);
		}
		public function buscarArea(){
			return datosArea::buscarArea($this->id);
		}
	}
?>
