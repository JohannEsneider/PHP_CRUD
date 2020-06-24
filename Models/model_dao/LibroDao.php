<?php 

	class LibroDao{
		
		function __construct(){}

		public static function save($libroDto){
			$db = Db::getConnect();
			try {
				$insert = $db->prepare('INSERT INTO libros VALUES(NULL, :nombre, :autor, :numCapitulos)');
				$insert->bindValue('nombre', $libroDto->getNombre());
				$insert->bindValue('autor', $libroDto->getAutor());
				$insert->bindValue('numCapitulos', $libroDto->getNumCapitulos());
				$insert->execute();
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
		}

		public static function all(){
			$db = Db::getConnect();
			$libroList = [];
			try {
				$sql = $db->query('SELECT * FROM libros');
				foreach ($sql->fetchAll() as $libro) {
					$libroList[] = new LibroDto($libro['id'], $libro['nombre'], $libro['autor'], $libro['numCapitulos']);
				}
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
			return $libroList;
		}

		public static function getById($id){
			$db = Db::getConnect();
			require_once 'Models/model_dto/LibroDto.php';
			try {
				$select = $db->prepare('SELECT * FROM libros WHERE id=:id');
				$select->bindValue('id', $id);
				$select->execute();
				$libroDb = $select->fetch();
				$libroDto = new LibroDto($libroDb['id'], $libroDb['nombre'], $libroDb['autor'], $libroDb['numCapitulos']);
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
			return $libroDto;
		}

		public static function update($libroDto){
			$db = Db::getConnect();
			try {
				$update = $db->prepare('UPDATE libros SET nombre=:nombre, autor=:autor, numCapitulos=:numCapitulos WHERE id=:id');
				$update->bindValue('id', $libroDto->getId());
				$update->bindValue('nombre', $libroDto->getNombre());
				$update->bindValue('autor', $libroDto->getAutor());
				$update->bindValue('numCapitulos', $libroDto->getNumCapitulos());
				$update->execute();
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
		}

		public static function delete($id){
			$db = Db::getConnect();
			try {
				$delete = $db->prepare('DELETE FROM libros WHERE id=:id');
				$delete->bindValue('id', $id);
				$delete->execute();			
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
		}
	}	

?>