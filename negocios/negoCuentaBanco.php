<?php
	class NegoCuentaBanco{
		private $numero;
        private $nombreBanco;
        private $tipo = "N/A";
        private $swift = "N/A";
	    
	    public function getNumero(){
	        return $this->numero;
	    }
		public function setId($numero){
			$this->numero = $numero;
		}
	    public function getNombreBanco(){
	        return $this->nombreBanco;
	    }
		public function setNombreBanco($nombreBanco){
			$this->nombreBanco = $nombreBanco;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function getSwift(){
			return $this->swift;
		}
		public function setSwift($swift){
			$this->swift = $swift;
		}
	}
?>