<?php 

	class LibroController{
		
		function __construct(){
		}

		function main(){
			
			require_once 'Views/Modules/main.php';
		}

		function create(){
			
			require_once 'Views/Modules/Libros/create.php';
		}

		function save($libroDto){			
			LibroDao::save($libroDto);
			header('Location: ../?controller=libro&action=create');
		}

		function read(){
			
			$libros = LibroDao::all();
			rsort($libros);
			require_once 'Views/Modules/Libros/read.php';
		}

		function update(){
			
			require_once 'Views/Modules/Libros/update.php';
		}

		function updateVw($libroDto){			
			
			require_once 'Views/Modules/Libros/update.php';			
		}

		function updateLibro($libroDto){
			LibroDao::update($libroDto);
			header('Location: ../?controller=libro&action=read');
		}

		function delete($id){
			
			require_once 'Models/model_dao/LibroDao.php';
			LibroDao::delete($id);
			header('Location: ?controller=libro&action=read');
		}

		function error(){
			
			require_once 'Views/Modules/error.php';
		}
	}

	if (isset($_POST['action'])) {
		require_once '../Connection/connection.php';
		require_once '../Models/model_dao/LibroDao.php';
		require_once '../Models/model_dto/LibroDto.php';
		$libroController = new LibroController();
		if ($_POST['action'] == 'create') {			
			$libroDto = new LibroDto(null, $_POST['nombre'], $_POST['autor'], $_POST['numCapitulos']);
			$libroController->save($libroDto);
		} elseif ($_POST['action'] == 'update') {
			$libroDto = new LibroDto($_POST['id'], $_POST['nombre'], $_POST['autor'], $_POST['numCapitulos']);
			$libroController->updateLibro($libroDto);
		}
	}

	if (isset($_GET['action'])) {
		if ($_GET['action'] != 'main' && $_GET['action'] != 'create' && $_GET['action'] != 'read') {
			$libroController = new LibroController();
			if ($_GET['action'] == 'update') {
				require_once 'Models/model_dao/LibroDao.php';
				$libroDto = LibroDao::getById($_GET['id']);
				$libroController->updateVw($libroDto);
			} elseif ($_GET['action'] == 'delete') {				
				$libroController->delete($_GET['id']);
			}
		}
	}

?>