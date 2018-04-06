<?php 
  include 'conexion.php';
  session_start();
  if(isset($_SESSION["id_usuario"])){
    header("Location: HOME/index.php");
  }
  
  if(!empty($_REQUEST))
  {
     $Alumno=$_REQUEST["Alumno"];
     $Contraseña=$_REQUEST["Contraseña"];
     $sql       = 'SELECT  FROM Persona';
     $resultado = $enlace->query($sql);
     //$sha1_pass = sha1($password);
      if (!$resultado) 
      {
         echo "Error de BD, no se pudo consultar la base de datos\n";
         echo "Error MySQL: " . $enlace->connect_error;
         header('location: CodigoError.html');
         exit;
      }
      $row_cont = $resultado->num_rows;
      $contU = 0;
      $contC = 0;
      $cont = 1;
//////////////////////////////////////////////////////////////////
   if($row_cont > 0)
   {
      for($i = 0; $i <$row_cont; $i++)
      {
          mysqli_data_seek ($resultado, $i);
          $extraido= mysqli_fetch_array($resultado);
          if($Alumno == $extraido['Nombre'] && $Contraseña == $extraido['Contraseña'])
           {
              header('location: HOME/index.php');
            }
        }
   }
?>





<?php 
session_start();
  
  if(isset($_SESSION["id_usuario"])){
    header("Location: welcome.php");
  }
  
  if(!empty($_POST))
  {
    $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $error = '';
    
    $sha1_pass = sha1($password);
    
    $sql = "SELECT id, id_tipo FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['id_usuario'] = $row['id'];
      $_SESSION['tipo_usuario'] = $row['id_tipo'];
      
      header("location: welcome.php");
      } else {
      $error = "El nombre o contraseña son incorrectos";
    }
  }
?>