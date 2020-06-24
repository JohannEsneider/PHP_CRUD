<?php 

	class LibroDto{
		
		public $id;
		public $nombre;
		public $autor;
		public $numCapitulos;

		function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this,$f),$a);
			}
		}

		function __construct4($id, $nombre, $autor, $numCapitulos){
			$this->id = $id;
			$this->nombre = $nombre;
			$this->autor = $autor;
			$this->numCapitulos = $numCapitulos;
		}

		function getId(){
			return $this->id;
		}

		function getNombre(){
			return $this->nombre;
		}

		function getAutor(){
			return $this->autor;
		}

		function getNumCapitulos(){
			return $this->numCapitulos;
		}

		function setId($id){
			$this->id = $id;
		}

		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function setAutor($autor){
			$this->autor = $autor;
		}

		function setNumCapitulos($numCapitulos){
			$this->numCapitulos = $numCapitulos;
		}


	}

?>