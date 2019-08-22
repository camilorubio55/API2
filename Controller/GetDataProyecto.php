<?php

require("BD.php");

$conexion = mysqli_connect($host,$db_name,$password,$db_name);

$consulta = "SELECT * FROM proyecto p WHERE p.USUID = 1";

$resultado = mysqli_query($conexion,$consulta);

// $row = mysqli_fetch_row($resultado);

while(($row=mysqli_fetch_row($resultado))==true){
echo $row[0] . " "; echo $row[1] . " "; echo $row[2] . " "; echo $row[3] . " ";
echo $row[4] . " "; echo $row[5] . " "; echo $row[6] . " ";
echo "<br>";
}

mysqli_close($conexion);

?>