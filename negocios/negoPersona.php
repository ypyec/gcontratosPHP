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
		
	    public function getNombres(){
	        return $nombres;
	    }
		public function setNombres($entNombres){
			$nombres = $entNombres;
		}
		
		public function getApellidos(){
			return $apellidos;
		}
		public function setApellidos(){
			self::$apellidos = $apellidos;
		}

		public function getProfesion(){
			return $profesion;
		}
		public function setProfesion(){
			self::$profesion = $profesion;
		}

	}
?>