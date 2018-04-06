<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css2/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css2/style.css" rel="stylesheet">
   
      <!--  Script Validacion  -->



  </head>

  <body class="Fondo">


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
              <a class="nav-link" href="Registro.php">Registrarse
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AcercaDe.html">Acerca De</a>
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
<br /> <br/>
<div class ="container rgba-white-light">
    




<?php

 echo "<br/> <p class='alert alert-danger'>Error Campos Invalidos</p>";
include 'conexion.php';
$Alumno=$_REQUEST["Alumno"];
$Contraseña=$_REQUEST["Contraseña"];
$sql       = 'SELECT * FROM Persona';
$resultado = $enlace->query($sql);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . $enlace->connect_error;
    header('location: CodigoError.html');
    exit;
}
$row_cont = $resultado->num_rows;
$contU = 0;
$contC = 0;
$cont = 1;


 if($row_cont > 0)
   {
      for($i = 0; $i <$row_cont; $i++)
      {
          mysqli_data_seek ($resultado, $i);
          $extraido= mysqli_fetch_array($resultado);
          if($Alumno == $extraido['Nombre'] && $Contraseña == $extraido['Contrasena'])
           {
            session_start();
            $_SESSION['usuario']=$extraido['Nombre'];
            $_SESSION['id']=$extraido['IdPersona'];
              header('location: HOME/index.php');
            }
        }
   }
mysqli_close($enlace);
?>

     <form action="RecibeDatos.php" onsubmit="return Validar()"">
                <label for="email">Usuario:</label>
                <input type="text" class="form-control" placeholder="Usuario" name="Alumno" id="Usuario" required/>      
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control"  placeholder="Contraseña" name="Contraseña" id="Cont" required>
              <br/><br/>
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
           </form>     
            <script type="text/javascript">
        function Validar()
        {
          //Obtener los datos de los campos
          Nombre    = document.getElementById("Usuario").value;
         
          if(Nombre == null || Nombre.length > 30)
          {
              alert("Nombre mUy largo");
              Nombre.style.backgroundColor ="#ff0000";
              return false;
          }
          return true;
        }
      </script>
      <!-- Login -->
</div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>