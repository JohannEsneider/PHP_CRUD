<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<link rel="stylesheet" href="Views/css/atlantis.css">
	<link rel="stylesheet" href="Views/css/botones.css">
</head>
<body>
	<div class="container" style="width: 100%; height: 600px;">
	<h2>ACTUALIZAR VENTA</h2>
	<form action="Controllers/sales_controller.php" method="POST">
		<input type="hidden" name="action" value="update">
		<input type="hidden" name="id" value="<?php echo $saleDto->getId() ?>">
		<div class="form-group has-success">
	<label for="successInput">Nombre del Producto</label>
	<input name="producto" type="text" id="successInput" class="form-control" value="<?php echo $saleDto->getProducto() ?>">
</div>
<div class="form-group has-success">
	<label for="successInput">Descripciòn del Producto</label>
	<input name="descripcion" type="text" id="successInput" class="form-control" value="<?php echo $saleDto->getDescripcion() ?>">
</div>
<div class="form-group has-success">
	<label for="successInput">Precio</label>
	<input name="precio" type="text" id="successInput" class="form-control" value="<?php echo $saleDto->getPrecio() ?>">
</div>
		<center>
		<button  type="submit" name="submit" value="Actualizar" class="bttn-stretch bttn-md bttn-warning">Actualizar registro</button>
	</center>
	</form>
</div>
</body>
</html>