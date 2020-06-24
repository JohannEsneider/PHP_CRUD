<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<link rel="stylesheet" href="Views/css/estilosTabla.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
</head>
<body>
<div class="container" style="width: 600px; height: 600px;">
	<h2>CONSULTAR VENTAS</h2>
	<table border="1">
		<tr>
			<td>Nombre del Producto</td>
			<td>Descripcion del Producto</td>
			<td>Precio</td>
			<td colspan="2">Acciones</td>
		</tr>
<?php 
	foreach ($sales as $sale) { ?>
		<tr>
			<td><?php echo $sale->getProducto(); ?></td>
			<td><?php echo $sale->getDescripcion(); ?></td>
			<td><?php echo $sale->getPrecio(); ?></td>
			<td><a data-toggle="tooltip" title="Actualizar registro" href="?controller=sales&action=update&id=<?php echo $sale->getId() ?>" <i class="material-icons">edit</a></td>
			<td><a <a data-toggle="tooltip" title="Eliminar registro" href="?controller=sales&action=delete&id=<?php echo $sale->getId() ?>" <i class="material-icons">delete</a></td>
		</tr>
<?php } ?>
	</table>
    </div>
</body>
</html>