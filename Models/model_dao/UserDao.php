<?php 

	class UserDao{
		
		function __construct(){}

		public static function save($userDto){
			$db = Db::getConnect();
			try {
				$insert = $db->prepare('INSERT INTO usuarios VALUES(NULL, :alias, :nombres, :email)');
				$insert->bindValue('alias', $userDto->getAlias());
				$insert->bindValue('nombres', $userDto->getNombres());
				$insert->bindValue('email', $userDto->getEmail());
				$insert->execute();
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
		}

		public static function all(){
			$db = Db::getConnect();
			$userList = [];
			try {
				$sql = $db->query('SELECT * FROM usuarios');
				foreach ($sql->fetchAll() as $user) {
					$userList[] = new UserDto($user['id'], $user['alias'], $user['nombres'], $user['email']);
				}
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
			return $userList;
		}

		public static function getById($id){
			$db = Db::getConnect();
			require_once 'Models/model_dto/UserDto.php';
			try {
				$select = $db->prepare('SELECT * FROM usuarios WHERE id=:id');
				$select->bindValue('id', $id);
				$select->execute();
				$userDb = $select->fetch();
				$userDto = new UserDto($userDb['id'], $userDb['alias'], $userDb['nombres'], $userDb['email']);
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
			return $userDto;
		}

		public static function update($userDto){
			$db = Db::getConnect();
			try {
				$update = $db->prepare('UPDATE usuarios SET alias=:alias, nombres=:nombres, email=:email WHERE id=:id');
				$update->bindValue('id', $userDto->getId());
				$update->bindValue('alias', $userDto->getAlias());
				$update->bindValue('nombres', $userDto->getNombres());
				$update->bindValue('email', $userDto->getEmail());
				$update->execute();
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
		}

		public static function delete($id){
			$db = Db::getConnect();
			try {
				$delete = $db->prepare('DELETE FROM usuarios WHERE id=:id');
				$delete->bindValue('id', $id);
				$delete->execute();			
			} catch (Exception $ex) {
				echo "ERROR: " . $ex->getMessage();
			}
			$db = null;
		}
	}	

?>