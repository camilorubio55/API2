<?php

require("BD.php");
require("Proyecto.php");

$conexion = mysqli_connect($host,$db_name,$password,$db_name);
$proyecto = new Proyecto();

$data = json_decode(file_get_contents("php://input"));

$proyecto->proyectoid = $data->proyectoid;
$proyecto->titulo = $data->titulo;
$proyecto->descripcion = $data->descripcion;
$proyecto->fecestimada = $data->fecestimada;
$proyecto->fecentrega = $data->fecentrega;
$proyecto->horas = $data->horas;
$proyecto->usuid = $data->usuid;

/*$consulta = "INSERT INTO proyecto (PROYECTOID,TITULO,DESCRIPCION,FECESTIMADA,FECENTREGA,HORAS,USUID) 
                          VALUES ($proyectoid,$titulo,$descripcion,$fecestimada,$fecentrega,$horas,$usuid)";*/

$resultado = mysqli_query($conexion,$consulta);

mysqli_close($conexion);

echo'Hola';

?>