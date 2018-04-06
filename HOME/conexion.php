<?php
$enlace = mysqli_connect("127.0.0.1", "root", "caput-draconis", "escuela");

if (!$enlace) {
    //echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    //echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    //echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    header('location: ErrorConexion.php');
}
echo "<br/> <p class='alert alert-success' id='alerta'>Conexion Realizada a la BD</p>";
?>