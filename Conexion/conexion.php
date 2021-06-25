<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title> Conexion </title>
</head>
<body>





<?php
$nombreBD="employees";
$usuarioBD="estudiante";
$passwordUBD="estudiante";
$hostBD="localhost:1246";

$conexion = mysqli_connect($hostBD,$usuarioBD,$passwordUBD);

if($conexion)
{
    echo "<p align='center', style='color:red'> MySQL le da permisos a PHP para que pueda ejecutar consultas </p>";
} else {
    echo "<p align='center'> Error en la conexion, no puedes realizar consultas </p>";
}

// echo "";
// echo "";
?>



</body>
</html>