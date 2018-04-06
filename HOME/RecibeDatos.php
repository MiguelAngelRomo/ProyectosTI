<?php
include 'conexion.php';
$Alumno=$_REQUEST["Alumno"];
$Contraseña=$_REQUEST["Contraseña"];
echo "Hola $Alumno <br/>";
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
echo "<table>";
echo "<thead>
              <tr>
                <th>Nombre</th>
                <th>Contraseña</th>
              </tr>
            </thead> <tbody>";
for($i = 0; $i <$row_cont; $i++)
{
    mysqli_data_seek ($resultado, $i);
	$extraido= mysqli_fetch_array($resultado);
	echo "<tr><td>".$extraido['Nombre']."</td>";
	echo "<td>".$extraido['Contraseña']."</td></tr>";
	if($Alumno == $extraido['Nombre'] && $Contraseña == $extraido['Contraseña'])
	{
		header('location: HOME/index.php');
	}
}
echo "</tbody></table>";
if($cont >= $row_cont)
{
	header('location: Error.php');	
}

/*echo "<br/>";
echo "- id: ".$extraido['IdPersona']."<br/>";
echo "- Nombre: ".$extraido['Nombre']."<br/>";
echo "- Apellido: ".$extraido['ApellidoP']."<br/>";
echo "- Contraseña: ".$extraido['Contraseña']."<br/>";*/
mysqli_close($enlace);
?>