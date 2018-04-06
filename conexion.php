
<?php
$enlace = mysqli_connect("127.0.0.1", "root", "caput-draconis", "escuela");

if (!$enlace) {
    header('location: ErrorConexion.php');
}
?>