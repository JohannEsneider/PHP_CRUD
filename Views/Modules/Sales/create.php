<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Views/css/atlantis.css">
	<link rel="stylesheet" href="Views/css/botones.css">
	<title>Create</title>
</head>
<body>
    <div class="container" style="width: 480px; height: 600px;">
	<h2>Registrar una Venta</h2>
	<form class="contact100-form validate-form" action="Controllers/sales_controller.php" method="POST">
   <input type="hidden" name="action" value="create">
  <div class="form-group has-success">
	<label for="successInput">Nombre del Producto</label>
	<input name="producto" type="text" id="successInput" class="form-control" required>
</div>
  <div class="form-group has-success">
	<label for="successInput">Descripcion del Producto</label>
	<input name="descripcion" type="text" id="successInput" class="form-control"required>
</div>
<div class="form-group has-success">
	<label for="successInput">Precio</label>
	<input name="precio" type="text" id="successInput" class="form-control"required>
</div>
  <center>
   <button  type="submit" name="submit" value="Guardar" class="bttn-stretch bttn-md bttn-primary">Registrar</button>
   </center>
    </form>
    </div>
</body>
</html>