<?php
	include_once '../datos/config.php';
	include_once 'negoContrato.php';
	include_once 'negoUsuario.php';

	class NegoEnmienda{
		private $id;
		private $numero;
		private $fechaFin;
		private $consultoria;
		private $monto;
		private $link;
		private $usuario;
		private $contrato;
		private $descripcionX;
		private $IVAX;
		private $IRX;
		private $gastosX;
		private $formaPagoX;
		private $fechaElaboracionX;

		function __construct($id=null,$numero=null,$fechaFin=null,$consultoria=null,$monto=null,$link=null,$usuario=null,$contrato=null,$descripcionX=null,$IVAX=null,$IRX=null,$gastosX=null,$formaPagoX=null,$fechaElaboracionX=null){
			
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
	    public function getNumero(){
	        return $this->numero;
	    }
		public function setNumero($numero){
			$this->numero = $numero;
		}
		public function getFechaFin(){
			return $this->fechaFin;
		}
		public function setFechaFin($fechaFin){
			$this->fechaFin = $fechaFin;
		}
		public function getConsultoria(){
			return $this->consultoria;
		}
		public function setConsultoria($consultoria){
			$this->consultoria = $consultoria;
		}
		public function getMonto(){
			return $this->monto;
		}
		public function setMonto($monto){
			$this->monto = $monto;
		}
		public function getLink(){
			return $this->link;
		}
		public function setLink($link){
			$this->link = $link;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getContrato(){
			return $this->contrato;
		}
		public function setContrato($contrato){
			$this->contrato = $contrato;
		}
		public function getDescripcionX(){
			return $this->descripcionX;
		}
		public function setDescripcionX($descripcionX){
			$this->descripcionX = $descripcionX;
		}
		public function getIVAX(){
			return $this->IVAX;
		}
		public function setIVAX($IVAX){
			$this->IVAX = $IVAX;
		}
		public function getIRX(){
			return $this->IRX;
		}
		public function setIRX($IRX){
			$this->IRX = $IRX;
		}
		public function getGastosX(){
			return $this->gastosX;
		}
		public function setGastosX($gastosX){
			$this->gastosX = $gastosX;
		}
		public function getFormaPagoX(){
			return $this->formaPagoX;
		}
		public function setFormaPagoX($formaPagoX){
			$this->formaPagoX = $formaPagoX;
		}
		public function getFechaElaboracionX(){
			return $this->fechaElaboracionX;
		}
		public function setFechaElaboracionX($fechaElaboracionX){
			$this->fechaElaboracionX = $fechaElaboracionX;
		}
	}
?>
