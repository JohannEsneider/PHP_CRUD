<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistema Bibliotecario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="Views/css/bootstrap.min.css">
  <link rel="stylesheet" href="Views/css/jquery-ui.css">
  <link rel="stylesheet" href="Views/css/owl.carousel.min.css">
  <link rel="stylesheet" href="Views/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="Views/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="Views/css/botones.css">
  <link rel="stylesheet" href="Views/css/footer.css">

  <link rel="stylesheet" href="Views/css/jquery.fancybox.min.css">
  <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="Views/css/bootstrap-datepicker.css">
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="Views/fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="Views/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="Views/css/aos.css">
  <link href="Views/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
  <link href="Views/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="Views/css/style.css">
  <link href="Views/css/bttn.min.css" rel="stylesheet" type="text/css"/>
    

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">
  <div class="p-3 mb-2 bg-dark text-dark">
      <div class="container">
          <div class="col-lg-14 text-center">
          <p><a class="text-white"><h1>CRUD en lenguaje PHP y MVC </h1></a></p>
          </div>
        </div>
      </div>
	</div>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="btn btn-dark btn-md" href="?controller=user&action=main">Inicio <span class="icon-unlock-alt"></span></a>
          </li>
             <center>
<button type="button" class="bttn-pill bttn-md bttn-danger" data-toggle="modal" data-target="#exampleModal">
  Instructor por favor dar clic.
</button>
</center>

          <li class="nav-item dropdown">
            <a class="mall btn btn-info px-4 py-2 rounded-8 dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Libros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?controller=libro&action=create">Agregar Libro</a>
              <a class="dropdown-item" href="?controller=libro&action=read">Consultar Libros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="mall btn btn-info px-4 py-2 rounded-8 dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuarios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?controller=user&action=create">Agregar Usuarios</a>
              <a class="dropdown-item" href="?controller=user&action=read">Consultar Usuarios</a>
          </li>
          <li class="nav-item dropdown">
            <a class="mall btn btn-info px-4 py-2 rounded-8 dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ventas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?controller=sales&action=create">Agregar Ventas</a>
              <a class="dropdown-item" href="?controller=sales&action=read">Consultar Ventas</a>
          </li>
    </nav>
	<?php 
		require_once 'Controllers/routes_controller.php';
	?>

    

  <script src="Views/js/jquery-3.3.1.min.js"></script>
  <script src="Views/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="Views/js/jquery-ui.js"></script>
  <script src="Views/js/popper.min.js"></script>
  <script src="Views/js/bootstrap.min.js"></script>
  <script src="Views/js/owl.carousel.min.js"></script>
  <script src="Views/js/jquery.stellar.min.js"></script>
  <script src="Views/js/jquery.countdown.min.js"></script>
  <script src="Views/js/bootstrap-datepicker.min.js"></script>
  <script src="Views/js/jquery.easing.1.3.js"></script>
  <script src="Views/js/aos.js"></script>
  <script src="Views/js/jquery.fancybox.min.js"></script>
  <script src="Views/js/jquery.sticky.js"></script>
  <script src="Views/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="Views/js/main.js"></script>

</body>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	<title>Layout</title>
</head>
<body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre desarrollador</h6>
            <p class="text-justify">SENA CENTRO DE SERVICIOS FINANCIEROS <i>Aplicacion Web desarrollada por Johann Chavez, Analisis y Desarrollo de Sistemas de información, Ficha 1694121, Jornada Fines de Semana.</p>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; Octubre/2019 
         <a href="#">Johann Esneider Chavez Machado</a>.
            </p>
          </div>
        </div>
      </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buen dia, instructor.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Instructor, ocurrio un problema al momento de eliminar un registro, cuando se le da clic al boton eliminar el sistema realiza la accion, pero manda un error debido a los estilos, por favor despues de eliminar el registro recargar la pagina de consulta para verificar la eliminacion del registro, Gracias por la atencion.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
  </body>
</html>

