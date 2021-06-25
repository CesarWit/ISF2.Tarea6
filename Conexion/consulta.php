<?php

include("conexion.php");

mysqli_set_charset($conexion,'utf8');

$conexion = new mysqli('localhost:1246','estudiante','estudiante','employees');

// Consulta en SQL
$consulta_sql = "SELECT * FROM employees WHERE emp_no<=10050";
// Mandar consulta
$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado);

// Creacion de columnas en html

echo "<table border='2'  align=center>";
echo "<tr>";
echo "    <th> ID </th>";
echo "    <th> Fecha nacimiento </th>";
echo "    <th> Nombre </th>";
echo "    <th> Apellido </th>";
echo "    <th> Género </th>";
echo "    <th> Fecha contratación </th>";
echo "</tr>";

// Linea 31: No funciono while($row = msqli_fetch_assoc($resultado))

if($count>0){
    while($row = $resultado->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['emp_no']."</td>";
        echo "<td>".$row['birth_date']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row['last_name']."</td>";
        echo "<td align=center>".$row['gender']."</td>";
        echo "<td>".$row['hire_date']."</td>";
        echo "</tr>";
    }

} else {
    echo "<h1> Sin datos en la base de datos </h1>";
}

echo "</table>";





?>



