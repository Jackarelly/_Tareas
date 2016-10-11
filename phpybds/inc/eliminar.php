<?php 
require('conexion.php');

$id = $_GET['id'];




	$consulta = "DELETE from trabajo where id = '$id'";
	$resultado = $mysqli -> query($consulta);
	header('location: ../administrar.php');
	exit()


 ?>