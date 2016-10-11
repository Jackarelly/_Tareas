<?php 

require('conexion.php');

$nombres = $_POST['nombres'];
$titulo = $_POST['titulo'];


$consulta = "INSERT INTO trabajo(nombre, titulo) VALUES('$nombres', '$titulo')";

$resultado = $mysqli -> query($consulta);
  
header("Location: ../administrar.php");
exit();
 ?>