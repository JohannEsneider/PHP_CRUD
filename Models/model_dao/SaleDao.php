<?php

class SaleDao{

function __construct(){}

public static function save($saleDto){
$db = Db::getConnect();
try {
$insert = $db->prepare('INSERT INTO ventas VALUES(NULL, :producto, :descripcion,  :precio)');
$insert->bindValue('producto', $saleDto->getProducto());
$insert->bindValue('descripcion', $saleDto->getDescripcion());
$insert->bindValue('precio', $saleDto->getPrecio());
$insert->execute();
} catch (Exception $ex) {
echo "ERROR: " . $ex->getMessage();
}
$db = null;
}

public static function all(){
$db = Db::getConnect();
$saleList = [];
try {
$sql = $db->query('SELECT * FROM ventas');
foreach ($sql->fetchAll() as $sale) {
$saleList[] = new SaleDto($sale['id'], $sale['producto'], $sale['descripcion'],  $sale['precio']);
}
} catch (Exception $ex) {
echo "ERROR: " . $ex->getMessage();
}
$db = null;
return $saleList;
}

public static function getById($id){
$db = Db::getConnect();
require_once 'Models/model_dto/SaleDto.php';
try {
$select = $db->prepare('SELECT * FROM ventas WHERE id=:id');
$select->bindValue('id', $id);
$select->execute();
$saleDb = $select->fetch();
$saleDto = new SaleDto($saleDb['id'], $saleDb['producto'], $saleDb['descripcion'],  $saleDb['precio']);
} catch (Exception $ex) {
echo "ERROR: " . $ex->getMessage();
}
$db = null;
return $saleDto;
}

public static function update($saleDto){
$db = Db::getConnect();
try {
$updateSale = $db->prepare('UPDATE ventas SET producto=:producto, descripcion=:descripcion, precio=:precio WHERE id=:id');
$updateSale->bindValue('id', $saleDto->getId());
$updateSale->bindValue('producto', $saleDto->getProducto());
$updateSale->bindValue('descripcion', $saleDto->getDescripcion());
$updateSale->bindValue('precio', $saleDto->getPrecio());
$updateSale->execute();
} catch (Exception $ex) {
echo "ERROR: " . $ex->getMessage();
}
$db = null;
}

public static function delete($id){
$db = Db::getConnect();
try {
$delete = $db->prepare('DELETE FROM ventas WHERE id=:id');
$delete->bindValue('id', $id);
$delete->execute();
} catch (Exception $ex) {
echo "ERROR: " . $ex->getMessage();
}
$db = null;
}
}

?>