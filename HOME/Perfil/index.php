<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Perfil</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->    
<link href="css/scrolling-nav.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="css2/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="css2/style.css" rel="stylesheet">


<!-- Librerias para el objeto Modal-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>
<body>
<?php
  include '../Validar.php';
 ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Perfil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/ESDB/HOME/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/ESDB/HOME/index.php">Ejercicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/ESDB/CerrarSesion.php">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php 
                  include('conexion.php');
                
                    $sql= "SELECT * FROM persona where IdPersona = ".$_SESSION['id'];
                    $resultado = $enlace->query($sql);
                    $filas = mysqli_fetch_array($resultado);
                      //Mostramos la imagen en este formato solo mostramos imagenes png
                      //Si necesitamos cambiar la extension haremos un if condicional
                      //para cada extension soportada gif,jpg, etc


                    //UPDATE `escuela`.`persona` SET `Foto`=? WHERE `IdPersona`='2';
?>
<div class="main">
  <div class="main_resize">
    <br/><br/>
    <div class="header">
      <div class="hbg"><img src="images/Cielo.jpg" width="923" height="291" alt="" /></div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2><span><?php echo "<h3>".$filas['Nombre']." ".$filas['ApellidoP']." ".$filas['ApellidoM']."</h3>"; ?></span></h2>
            <div class="clr"></div>
            <!-- Contenido-->
           
            <!--Fin Contenido-->
            
            <div class="clr"></div>
          </div>
          <div class="article">
            <h2>Informacion del alumno: </h2>
            <div class="clr"></div>
            <!--
            <img src="images/images_2.jpg" width="613" height="193" alt="" /> -->
           <table class="table table-responsive table-dark">
                <thead>
                    <tr>
                      <th>Edad</th>
                      <th>Direccion</th>
                      <th>Email</th>
                      <th>Fecha Nacimiento</th>
                      <th>Alias</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><?php echo $filas['Edad'].""; ?></td>
                      <td><?php echo $filas['Calle'].""; ?></td>
                      <td><?php echo $filas['Correo'].""; ?></td>
                      <td><?php echo $filas['fecha_nac'].""; ?></td>
                      <td><?php echo $filas['NomUsr'].""; ?></td>
                    </tr>
                </tbody>
           </table>
            <!-- Contenido-->

            <!--Fin Contenido-->
                  
            <!--<p class="spec"><a href="#" class="com fr">Comments (7)</a> <a href="#" class="rm fl">Read more</a></p>-->
            <div class="clr"></div>
          </div>
          <!--
          <div class="pagenavi"><span class="pages">Page 1 of 2</span><span class="current">1</span><a href="#">2</a><a href="#" >&raquo;</a></div> -->
          <!-- Button to Open the Modal -->


          <br/>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <!-- Contenido-->
                <div class="img-thumbnail bg-dark" style="width: 300px; height: 200px; ">
                  
   <img src="data:image/png;base64,<?php echo base64_encode($filas['Foto']); ?>" alt="titulo foto" class = "img img-thumbnail" />
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Cambiar Imagen de perfil
</button>
                </div>
            <!--Fin Contenido-->          
          </div>
          <div class="gadget">
            <!-- Contenido-->
                         
            <!--Fin Contenido-->
          </div>
          <div class="gadget">
            <!-- Contenido-->

            <!--Fin Contenido-->
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>

</body>
</html>