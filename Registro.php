<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

  <!--  Script Validacion  -->
      <script type="text/javascript">
        function Validar()
        {
          //Obtener los datos de los campos
          Nombre    = document.getElementById("Nombre").value;
          ApellidoP = document.getElementById("ApellidoP").value;
          ApelldioM = document.getElementById("ApelldioM").value;
          NomUsr    = document.getElementById("NomUsr").value;
          Edad      = document.getElementById("Edad").value;
          Calle     = document.getElementById("Calle").value;
          Colonia   = document.getElementById("Colonia").value;
          Cp        = document.getElementById("Cp").value;
          Email     = document.getElementById("email").value;
          Fecha_nac = document.getElementById("Fecha_nac").value;
          Contraseña = document.getElementById("Cont").value;
          if(Nombre == null || Nombre.length > 8)
          {
              Nombre.class = "bg-danger";
              return false;
          }
          return true;
        }
      </script>
      <!--  Script Validacion  -->




  </head>

  <body>
<?php 
include 'conexion.php';
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
              <a class="nav-link" href="index.php">Iniciar Sesion
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

    <!-- Page Content -->
    <div class="container">
        <br />
        <br />
      <!-- Registro -->
    <form action="Registro_proc.php" onsubmit="return Validar()">
  <div class="form-group">
    
      <div class="form-row">
            <div class="col-md-3">
                    <!-- Nombre -->
                    <label for="Nombre">Nombre:</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="Nombre" id="Nombre" required/>
            </div>
            <div class="col-md-3">
                  <!-- Apellido Paterno -->
                  <label for="ApellidoP">Apellido Paterno:</label>
                  <input type="text" class="form-control" placeholder="Apellido Paterno" name="ApellidoP" id="ApellidoP" required/>
            </div>
             <div clss="col-md-3">
                  <!-- Apellido Materno -->
                  <label for="ApellidoM">Apellido Materno:</label>
                  <input type="text" class="form-control" placeholder="Apellido Materno" name="ApellidoM" id="ApellidoM" required/>
            </div>
            <div class="col-md-3">
                    <!-- Nombre Usuario-->
                    <label for="Nombre">Alias:</label>
                    <input type="text" class="form-control" placeholder="Alias" name="NomUsr" id="NomUsr" required/>
            </div>
            <div class = "col-md-3">
                    <!-- Edad -->
                    <label for="Edad">Edad:</label>
                    <input type="text" class="form-control" placeholder="Edad" name="Edad" id="Edad" required/>
            </div>
            <div class="col-md-3">        
                <!-- Calle -->
                <label for="Calle">Calle:</label>
                <input type="text" class="form-control" placeholder="Calle" name="Calle" id="Calle" required/>
            </div>
            <div class="col-md-3">
                  <!-- Colonias -->
                  <label for="Colonia">Colonia:</label>
                  <input type="text" class="form-control" placeholder="Colonia" name="Colonia" id="Colonia" required/>
            </div>
            <div class="col-md-3">
                  <!-- Codigo Postal -->
                  <label for="Cp">Codigo Postal:</label>
                  <input type="text" class="form-control" placeholder="Codigo Postal" name="Cp" id="Cp" required/>
            </div>
            <div class = "col-md-3">
                  <!-- Correo -->
                  <label for="Cp">Correo Electronico:</label>
                  <input type="email" class="form-control" placeholder="Correo Electronico" name="email" id="email" required/>  
            </div>
            <div class="col-md-3">
                  <!-- Fecha Nacimiento -->
                  <label for="fecha_nac">Fecha Nacimiento:</label>
                  <input type="date" class="form-control" placeholder="000-00-00" name="Fecha_nac" id="Fecha_nac" required/>
            </div>
            <br/>
            <div class="col-md-3">
                  <!-- Foto Perfil -->
                  <label for="foto">Foto:</label>
                  <input type="file" class="form-control"  name="foto" id="foto" required/>
            </div>
           </div>
                  <!-- Contraseña -->
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control"  placeholder="Contraseña" name="Contraseña" id="Cont" required>
    <br/>
    <button type="submit" class="btn btn-primary">Registrarme</button>
    <br /><br />

</div>
  </form>
      <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:10%"></div>  
      </div>
      <br/>
  <!-- Registro -->

    
      </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>