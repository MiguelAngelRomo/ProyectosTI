<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo-principal.css">
		<title>Buscaminas</title>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="">
    	<meta name="author" content="">

    	<!-- Bootstrap core CSS -->
    	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    	<!-- Custom styles for this template -->
    	<link href="css/logo-nav.css" rel="stylesheet">

    	<!-- Material Design Bootstrap -->
    	<link href="css2/mdb.min.css" rel="stylesheet">
    	<!-- Your custom styles (optional) -->
    	<link href="css2/style.css" rel="stylesheet">
	</head>

	<body>
    <?php
  include '../Validar.php';
 ?>
		<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="Manzana-Logo.svg" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/ESDB/HOME/index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ESDB/HOME/Perfil.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ESDB/CerrarSesion.php">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<style type="text/css">
  .Fondo
  {
    background-image: url('Escolar-login.jpg');
  }
</style>
<br />
<br />
    <!-- Page Content -->
    <div class="container rgba-white-light  ">
        <br />
        <br />
      <!-- Login -->
      <div id="contenedor01">
        <div id="opciones">
      	</div>
		
      <div id="juego">
          <table id="Casilla">
          </table>
      </div>
  </div>
      <script type="text/javascript" src="js/index.js">


			</script>
      <!-- Login -->

      <!--    -->
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		
	</body>
</html>