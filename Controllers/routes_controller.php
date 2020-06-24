<?php

function call($controller, $action){
require_once 'Controllers/' . $controller . '_controller.php';

switch ($controller) {
case 'user':
require_once 'Models/model_dao/UserDao.php';
require_once 'Models/model_dto/UserDto.php';
$controller = new UserController();
break;
case 'sales':
   require_once 'Models/model_dao/SaleDao.php';
require_once 'Models/model_dto/SaleDto.php';
$controller = new SalesController();
break;
case 'libro':
   require_once 'Models/model_dao/LibroDao.php';
require_once 'Models/model_dto/LibroDto.php';
$controller = new LibroController();
break;
}
$controller->$action();
}

$controllers = array(
'sales' => [ 'create', 'read', 'update', 'delete'],
'libro' => [ 'create', 'read', 'update', 'delete'],
'user' => ['main', 'create', 'read', 'update', 'delete'],

);

if (array_key_exists($controller, $controllers)) {
if (in_array($action, $controllers[$controller])) {
if (in_array($action, $controllers[$controller])) {
call($controller, $action);
} else {
call('user', 'error');
}
} else {
call('sales', 'error');
   }
} else {
call('libro', 'error');
}



?>