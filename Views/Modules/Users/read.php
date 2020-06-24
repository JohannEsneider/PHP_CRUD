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
	<h2>CONSULTAR USUARIOS</h2>
	<table border="1">
		<tr>
			<td>Alias</td>
			<td>Nombres</td>
			<td>Email</td>
			<td colspan="2">Acciones</td>
		</tr>
<?php 
	foreach ($users as $user) { ?>
		<tr>
			<td><?php echo $user->getAlias(); ?></td>
			<td><?php echo $user->getNombres(); ?></td>
			<td><?php echo $user->getEmail(); ?></td>
			<td><a data-toggle="tooltip" title="Actualizar registro" href="?controller=user&action=update&id=<?php echo $user->getId() ?>" <i class="material-icons">edit</a></td>
			<td><a data-toggle="tooltip" title="Eliminar registro" href="?controller=user&action=delete&id=<?php echo $user->getId() ?>" <i class="material-icons">delete</a></td>
		</tr>
<?php } ?>
	</table>
</div>
</body>
</html>