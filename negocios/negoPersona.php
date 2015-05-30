<?php
	class NegoPersona{
		private $id;
		private $nombres;
		private $apellidos;
		private $profesion;
		private $telefono;
		private $ciudad;
		private $pais;
		private $cargo;
		private $idCuentaX;
		private $experienciaX;
		private $direccionX;
	    
	    public function getId(){
	        return $id;
	    }
		public function setId($id){
			self::$id = $id;
		}
		
	    public function getNombre(){
	        return $nombres;
	    }
		public function setNombre($nombres){
			self::$nombres = $nombres;
		}
		
		public function getApellidos(){
			
		}

	}
?>