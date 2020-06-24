<?php 
	
	$cnn = Db::getConnect();
	class Db{
		
		private static $instance = null;

		private function __construct(){}

		private function __clone(){}

		public static function getConnect(){
			try {
				if (!isset(self::$instance)) {
					$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
					self::$instance = new PDO('mysql:host=localhost;port=3306;dbname=taller_php', 'root', '', $pdo_options);
				}
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			return self::$instance;
		}
	}

?>