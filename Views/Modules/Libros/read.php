<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<link rel="stylesheet" href="Views/css/estilosTabla.css">
	<link rel="stylesheet" href="Views/css/botones.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
</head>
<body>

<div class="container" style="width: 600px; height: 600px;">
	<h2>CONSULTAR LIBROS</h2>
	<table border="1">
		<tr>
			<td>Nombre del Libro</td>
			<td>Autor del Libro</td>
			<td>Número de Capitulos</td>
			<td colspan="2">Acciones</td>
		</tr>
<?php 
	foreach ($libros as $libro) { ?>
		<tr>
			<td><?php echo $libro->getNombre(); ?></td>
			<td><?php echo $libro->getAutor(); ?></td>
			<td><?php echo $libro->getNumCapitulos(); ?></td>
			<td><a data-toggle="tooltip" title="Actualizar registro" href="?controller=libro&action=update&id=<?php echo $libro->getId() ?>" <i class="material-icons">edit</a></td>
			<td><a <a data-toggle="tooltip" title="Eliminar registro" href="?controller=libro&action=delete&id=<?php echo $libro->getId() ?>" <i class="material-icons">delete</a></td>
		</tr>
<?php } ?>
	</table>
    </div>
    <!-- Button trigger modal -->
 
<!-- Modal -->

</body>
</html>