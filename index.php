<?php 
	
	require_once 'Connection/connection.php';

	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	} else {
		$controller = 'user';
		$action = 'main';		
	}
	require_once 'Views/layout.php';

?>