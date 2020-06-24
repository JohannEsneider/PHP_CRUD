<?php 

	class UserController{
		
		function __construct(){
		}

		function main(){
			require_once 'Views/Modules/main.php';
		}

		function create(){
			require_once 'Views/Modules/Users/create.php';
		}

		function save($userDto){			
			UserDao::save($userDto);
			header('Location: ../?controller=user&action=create');
		}

		function read(){
			$users = UserDao::all();
			rsort($users);
			require_once 'Views/Modules/Users/read.php';
		}

		function update(){
			require_once 'Views/Modules/Users/update.php';
		}

		function updateVw($userDto){			
			require_once 'Views/Modules/Users/update.php';			
		}

		function updateUser($userDto){
			UserDao::update($userDto);
			header('Location: ../?controller=user&action=read');
		}

		function delete($id){
			require_once 'Models/model_dao/UserDao.php';
			UserDao::delete($id);
			header('Location: ?controller=user&action=read');
		}

		function error(){
			require_once 'Views/Modules/error.php';
		}
	}

	if (isset($_POST['action'])) {
		require_once '../Connection/connection.php';
		require_once '../Models/model_dao/UserDao.php';
		require_once '../Models/model_dto/UserDto.php';
		$userController = new UserController();
		if ($_POST['action'] == 'create') {			
			$userDto = new UserDto(null, $_POST['alias'], $_POST['nombres'], $_POST['email']);
			$userController->save($userDto);
		} elseif ($_POST['action'] == 'update') {
			$userDto = new UserDto($_POST['id'], $_POST['alias'], $_POST['nombres'], $_POST['email']);
			$userController->updateUser($userDto);
		}
	}

	if (isset($_GET['action'])) {
		if ($_GET['action'] != 'main' && $_GET['action'] != 'crate' && $_GET['action'] != 'read') {
			$userController = new UserController();
			if ($_GET['action'] == 'update') {
				require_once 'Models/model_dao/UserDao.php';
				$userDto = UserDao::getById($_GET['id']);
				$userController->updateVw($userDto);
			} elseif ($_GET['action'] == 'delete') {				
				$userController->delete($_GET['id']);
			}
		}
	}

?>