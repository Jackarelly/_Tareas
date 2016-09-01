<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$cua = $altura * $altura;


$indice1 = $peso / $cua;



header('Location: ../ejer2.php?res='.$indice1.'');

 ?>