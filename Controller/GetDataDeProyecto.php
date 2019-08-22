<?php

require("BD.php");

$deproyectoid = $deproid;

$conexion = mysqli_connect($host,$db_name,$password,$db_name);

$consulta = "SELECT * FROM deproyecto d WHERE d.DEPROYECTOID = '$deproyectoid'";

$resultado = mysqli_query($conexion,$consulta);

// $row = mysqli_fetch_row($resultado);

while(($row=mysqli_fetch_row($resultado))==true){
echo $row[0] . " "; echo $row[2] . " "; echo $row[3] . " ";
echo $row[4] . " ";
echo "<br>";
}

mysqli_close($conexion);

?>