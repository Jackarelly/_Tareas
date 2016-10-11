<?php
  require('conexion.php');
  $id = $_POST['id'];
 $nombres = $_POST['nombres'];
$titulo = $_POST['titulo'];

  $consulta="UPDATE trabajo SET nombre = '$nombres',titulo ='$titulo'  WHERE id = '$id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../administrar.php");
  exit(); 
?>