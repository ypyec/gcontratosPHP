<?php
	include_once 'negoCuentaBanco.php';

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
	        return $this->id;
	    }
		public function setId($id){
			$this->id = $id;
		}
	    public function getNombres(){
	        return $this->nombres;
	    }
		public function setNombres($nombres){
			$this->nombres = $nombres;
		}
		public function getApellidos(){
			return $this->apellidos;
		}
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}
		public function getProfesion(){
			return $this->profesion;
		}
		public function setProfesion($profesion){
			$this->profesion = $profesion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getCiudad(){
			return $this->ciudad;
		}
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getCargo(){
			return $this->cargo;
		}
		public function setCargo($cargo){
			$this->cargo = $cargo;
		}
		public function getIdCuentaX(){
			return $this->idCuentaX;
		}
		public function setIdCuentaX($idCuentaX){
			$this->idCuentaX = $idCuentaX;
		}
		public function getExperienciaX(){
			return $this->experienciaX;
		}
		public function setExperienciaX($experienciaX){
			$this->experienciaX = $experienciaX;
		}
		public function getDireccionX(){
			return $this->direccionX;
		}
		public function setDireccionX($direccionX){
			$this->direccionX = $direccionX;
		}	
		
	}
?>