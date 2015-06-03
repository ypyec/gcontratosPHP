<?php
	include_once '../datos/config.php';
	
	class NegoUsuario{
		private $id;
		private $nombre;
		private $email;
	    
		function __construct($id=null,$nombre=null,$email=null){

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
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
	}
?>
