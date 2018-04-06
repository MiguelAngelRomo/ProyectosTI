<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">


    <!-- Material Design Bootstrap -->
    <link href="css2/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css2/style.css" rel="stylesheet">

  </head>

  <body class="Fondo">
<?php
  include '../Validar.php';
 ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <?php
          echo "<p>".$_SESSION['usuario']."</p>";
          ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Perfil/index.php">Perfil</a>
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
    <!-- Page Content -->
    <div class="container">
      <br/>
          <center><h2 class="modal-title" id="Ejercicio">Ejercicios</h2></center>
          <br/>
          <!-- Inicio Fila 1-->
            <div class="row">
                <div class="col">
                  <a href="E1/index.php">
                        <div class="card  bg-dark text-white">
                              <div class="card-body">
                                  Ejercicio 1
                                <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                </p>
                                <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                              </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 2
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 3
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
              </div>
            <!--Fin Fila 1 -->
            <br/><br/>
            <!--Inicio Fila 2 -->
              <div class="row">
                <div class="col">
                    <div class="card  bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 4
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 5
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 6
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
              </div>
            <!--Fin Fila 2 --> 
            <br/><br/>
            <!--Inicio Fila 3 -->
              <div class="row">
                <div class="col">
                    <div class="card  bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 7
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 8
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 9
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
              </div>
            <!--Fin Fila 3 -->
            <br/><br/>
            <!--Inicio Fila 4 -->
              <div class="row">
                <div class="col">
                    <div class="card  bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 10
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 11
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card bg-dark text-white">
                          <div class="card-body">
                              Ejercicio 12
                            <img src="Manzana-Logo.svg" class="img-thumbnail" alt="Cinque Terre">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                            <center><input type="button" name="" class="btn btn-danger" value="Ir a Ejercicio"></center>
                          </div>
                    </div>
                </div>
              </div>
            <!--Fin Fila 4 -->       
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
