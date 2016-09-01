<?php 
	
	$cantidad = $_POST['cantidad'];
	$moneda = $_POST['moneda'];

	$taza = 29;
	$resultado;


	switch ($moneda) {
		case '1':
			$resultado = $cantidad / $taza;

			header('Location: ../ejer1.php?res='.$resultado.'');
			break;

			case '2':
			$resultado = $cantidad * $taza;
		header('Location: ../ejer1.php?res='.$resultado.'');
			break;
		
		default:
			echo "Valores no validos";
			break;
	}
	
 ?>