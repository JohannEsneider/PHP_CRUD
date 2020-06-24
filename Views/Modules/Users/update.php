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
	<h2>ACTUALIZAR USUARIO</h2>
	<form action="Controllers/user_controller.php" method="POST">
		<input type="hidden" name="action" value="update">
		<input type="hidden" name="id" value="<?php echo $userDto->getId() ?>">
		<div class="form-group has-success">
	<label for="successInput">Alias del Usuario</label>
	<input name="alias" type="text" id="successInput" class="form-control" value="<?php echo $userDto->getAlias() ?>">
</div>
<div class="form-group has-success">
	<label for="successInput">Nombre del Usuario</label>
	<input name="nombres" type="text" id="successInput" class="form-control" value="<?php echo $userDto->getNombres() ?>">
</div>
<div class="form-group has-success">
	<label for="successInput">E-mail del Usuario</label>
	<input name="email" type="text" id="successInput" class="form-control" value="<?php echo $userDto->getEmail() ?>">
</div>
		<center>
		<button  type="submit" name="submit" value="Actualizar" class="bttn-stretch bttn-md bttn-warning">Actualizar registro</button>
	</center>
	</form>
</div>
</body>
</html>