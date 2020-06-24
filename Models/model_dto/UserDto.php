<?php 

	class UserDto{
		
		public $id;
		public $alias;
		public $nombres;
		public $email;

		function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this,$f),$a);
			}
		}

		function __construct4($id, $alias, $nombres, $email){
			$this->id = $id;
			$this->alias = $alias;
			$this->nombres = $nombres;
			$this->email = $email;
		}

		function getId(){
			return $this->id;
		}

		function getAlias(){
			return $this->alias;
		}

		function getNombres(){
			return $this->nombres;
		}

		function getEmail(){
			return $this->email;
		}

		function setId($id){
			$this->id = $id;
		}

		function setAlias($alias){
			$this->alias = $alias;
		}

		function setNombres($nombres){
			$this->nombres = $nombres;
		}

		function setEmail($email){
			$this->email = $email;
		}


	}

?>