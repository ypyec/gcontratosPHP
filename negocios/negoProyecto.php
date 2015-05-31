<?php
	include_once 'negoArea.php';

	class NegoProyecto{
		private $id;
		private $nombre;
		private $area;
	    
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
		public function getArea(){
			return $this->area;
		}
		public function setArea($area){
			$this->area = $area;
		}
	}
?>