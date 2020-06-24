<?php

class SalesController{

function __construct(){
}

function main(){
require_once 'Views/Modules/main.php';
}

function create(){
require_once 'Views/Modules/Sales/create.php';
}

function save($saleDto){
SaleDao::save($saleDto);
header('Location: ../?controller=sales&action=create');
}

function read(){
$sales = SaleDao::all();
rsort($sales);
require_once 'Views/Modules/Sales/read.php';
}

function update(){
require_once 'Views/Modules/Sales/update.php';
}

function updateVws($saleDto){
require_once 'Views/Modules/Sales/update.php';
}

function updateSales($saleDto){
SaleDao::update($saleDto);
header('Location: ../?controller=sales&action=read');
}

function delete($id){
header('Location: ?controller=sales&action=read');
SaleDao::delete($id);
}

function error(){
require_once 'Views/Modules/error.php';
}
}

if (isset($_POST['action'])) {
require_once '../Connection/connection.php';
require_once '../Models/model_dao/SaleDao.php';
require_once '../Models/model_dto/SaleDto.php';
$salesController = new SalesController();
if ($_POST['action'] == 'create') {
$saleDto = new SaleDto(null, $_POST['producto'], $_POST['descripcion'], $_POST['precio']);
$salesController->save($saleDto);
} else if ($_POST['action'] == 'update') {
$saleDto = new SaleDto($_POST['id'], $_POST['producto'], $_POST['descripcion'], $_POST['precio']);
$salesController->updateSales($saleDto);
}
}

if (isset($_GET['action'])) {
if ($_GET['action'] != 'main' && $_GET['action'] != 'create' && $_GET['action'] != 'read') {
$salesController = new SalesController();
require_once 'Models/model_dao/SaleDao.php';
if ($_GET['action'] == 'update') {

$saleDto = SaleDao::getById($_GET['id']);
$salesController->updateVws($saleDto);
}
elseif ($_GET['action'] == 'delete') {

$salesController->delete($_GET['id']);

}
}
}

?>