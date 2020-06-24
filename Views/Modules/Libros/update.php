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
	<h2>ACTUALIZAR LIBRO</h2>
	<form action="Controllers/libro_controller.php" method="POST">
		<input type="hidden" name="action" value="update">
		<input type="hidden" name="id" value="<?php echo $libroDto->getId() ?>">
		<div class="form-group has-success">
	<label for="successInput">Nombre del Libro</label>
	<input name="nombre" type="text" id="successInput" class="form-control" value="<?php echo $libroDto->getNombre() ?>">
</div>
<div class="form-group has-success">
	<label for="successInput">Autor del Libro</label>
	<input  name="autor" type="text" style="width: width: 190px;" id="successInput" class="form-control" value="<?php echo $libroDto->getAutor() ?>">
</div>
<div class="form-group has-success">
	<label for="successInput">Número de Capitulos</label>
	<input name="numCapitulos" type="text" id="successInput" class="form-control" value="<?php echo $libroDto->getNumCapitulos() ?>">
</div>
		<center>
		<button  type="submit" name="submit" value="Actualizar" class="bttn-stretch bttn-md bttn-warning">Actualizar registro</button>
	</form>
</div>
</body>
</html>