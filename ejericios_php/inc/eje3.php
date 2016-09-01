<?php 

$horas = $_POST['horas'];

$pago_por_hora = 57;

$bruto = $horas * $pago_por_hora;

$inss = $bruto * 0.15;

$ir = $bruto * 0.06;

$total = $bruto - $inss - $ir;



header('Location: ../ejer3.php?bruto='.$bruto.'&inss='.$inss.'&ir='.$ir.'&total='.$total.'');

 ?>