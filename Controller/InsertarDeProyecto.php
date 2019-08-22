<?php

require("BD.php");

$conexion = mysqli_connect($host,$db_name,$password,$db_name);

$consulta = "INSERT INTO deproyecto (DEPROYECTOID,PROYECTOID,TITULO,DESCRIPCION,FECHA) 
                          VALUES (4,1,'PRUEBA DETALLE TITULO', 'PRUEBA DETALLE DESCRIP','2019-08-21')";

$resultado = mysqli_query($conexion,$consulta);

mysqli_close($conexion);

?>