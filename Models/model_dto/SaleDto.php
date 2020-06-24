<?php

class SaleDto{

public $id;
public $producto;
public $descripcion;
public $precio;

function __construct(){
$a = func_get_args();
$i = func_num_args();
if (method_exists($this, $f='__construct'.$i)) {
call_user_func_array(array($this,$f),$a);
}
}

function __construct4($id, $producto, $descripcion, $precio){
$this->id = $id;
$this->producto = $producto;
$this->descripcion = $descripcion;
$this->precio = $precio;
}

function getId(){
return $this->id;
}

function getProducto(){
return $this->producto;
}

function getDescripcion(){
return $this->descripcion;
}

function getPrecio(){
return $this->precio;
}

function setId($id){
$this->id = $id;
}

function setProducto($producto){
$this->producto = $producto;
}

function setDescripcion($descripcion){
$this->descripcion = $descripcion;
}

function setPrecio($precio){
$this->precio = $precio;
}

}

?>