<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
 
<body>
 
<?php 
include('conexion.php');
 
$sql= "SELECT Foto FROM persona where IdPersona = 1";
$resultado = $enlace->query($sql);
$filas = mysqli_fetch_array($resultado);
//Mostramos la imagen en este formato solo mostramos imagenes png
//Si necesitamos cambiar la extension haremos un if condicional
//para cada extension soportada gif,jpg, etc
?>
   <img src="data:image/png;base64,<?php echo base64_encode($filas['Foto']); ?>" alt="titulo foto" width = "300" height = "300" />
</body>
</html>
</html>