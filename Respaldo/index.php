<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Entar Al sistema</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<?php 
include 'conexion.php';
?>
  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="Nombre"/>
      <input type="password" placeholder="Contraseña"/>
      <input type="text" placeholder="Correo Electronico"/>
      <button>Crear Cuenta</button>
      <p class="message">¿Ya estas registrado? <a href="#">Entra</a></p>
    </form>
    <form class="login-form" method="get" action="RecibeDatos.php">
      <input type="text" placeholder="Usuario" name="Alumno" id="Usuario" required />
      <input type="password" placeholder="Contraseña" name="Contraseña" id="Cont" required/>
      <button>Entrar</button>
      <p class="message">¿No tienes cuenta? <a href="#">Create una cuenta aqui</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>




</body>

</html>
