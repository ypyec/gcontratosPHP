<?php
	include_once 'negoPersona.php';
	include_once 'negoEmpresa.php';
	include_once 'negoProyecto.php';
	include_once 'negoUsuario.php';

	class NegoContrato{
		private $numero;
		private $fechaInicio;
		private $fechaFin;
		private $consultoria;
		private $monto;
		private $pais;
		private $fechaFirma;
		private $link;
		private $usuario;
		private $persona;
		private $empresa;
		private $proyecto;
		private $descripcionX;
		private $obligacionesAdicionalesX = "Las demas especificadas en los Terminos de Referencia";
		private $IVAX;
		private $IRX;
		private $gastosX;
		private $formaPagoX;
		private $fechaElaboracionX;
		private $duracionX;

	    public function getNumero(){
	        return $this->numero;
	    }
		public function setNumero($numero){
			$this->numero = $numero;
		}
		public function getFechaInicio(){
			return $this->fechaInicio;
		}
		public function setFechaInicio($fechaInicio){
			$this->fechaInicio = $fechaInicio;
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
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getFechaFirma(){
			return $this->fechaFirma;
		}
		public function setFechaFirma($fechaFirma){
			$this->fechaFirma = $fechaFirma;
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
		public function getPersona(){
			return $this->persona;
		}
		public function setPersona($persona){
			$this->persona = $persona;
		}
		public function getEmpresa(){
			return $this->empresa;
		}
		public function setEmpresa($empresa){
			$this->empresa = $empresa;
		}
		public function getProyecto(){
			return $this->proyecto;
		}
		public function setProyecto($proyecto){
			$this->proyecto = $proyecto;
		}
		public function getDescripcionX(){
			return $this->descripcionX;
		}
		public function setDescripcionX($descripcionX){
			$this->descripcionX = $descripcionX;
		}
		public function getObligacionesAdicionalesX(){
			return $this->obligacionesAdicionalesX;
		}
		public function setObligacionesAdicionalesX($obligacionesAdicionalesX){
			$this->obligacionesAdicionalesX = $obligacionesAdicionalesX;
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
		public function getDuracionX(){
			return $this->duracionX;
		}
		public function setDuracionX($duracionX){
			$this->duracionX = $duracionX;
		}
	}
?>