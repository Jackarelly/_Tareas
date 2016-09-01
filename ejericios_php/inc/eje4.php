<?php 

$valor = $_POST['valor'];
$medida = $_POST['medida'];
$salida = $_POST['salida'];
$resultado;

switch ($medida) {
	case '1':
		
		if ($salida == 1) 
		{
			$resultado = $valor / 1;
		}

		else
		{
			if ($salida == 2) 
			{
				$resultado = $valor * 1000;
			}

			else
			{
				if ($salida == 3) 
				{
					$resultado = $valor * 39370;
				}

				else
				{
					if ($salida == 4) 
					{
						$resultado = $valor * 100000;
					}
				}
			}
		}

			header('Location: ../ejer4.php?res='.$resultado.'');

		break;
	case '2':
		
		if ($salida == 1) 
		{
			$resultado = $valor * 0.001;
		}

		else
		{
			if ($salida == 2) 
			{
				$resultado = $valor * 1;
			}

			else
			{
				if ($salida == 3) 
				{
					$resultado = $valor * 39.3701;
				}
				else
				{
					if ($salida == 4) 
					{
						$resultado = $valor * 100;
					}
				}
			}
		}

		header('Location: ../ejer4.php?res='.$resultado.'');

		break;

		case '3':
			if ($salida == 1) 
			{
				$resultado = $valor * 0.000025;
			}

			else
			{
				if ($salida == 2) 
				{
					$resultado = $valor * 0.0254;
				}

				else
				{
					if ($salida == 3) 
					{
						$resultado = $valor * 1;
					}
					else
					{
						if ($salida) 
						{
							$resultado = $valor * 2.5400013716000003;
						}
					}
				}
			}
				header('Location: ../ejer4.php?res='.$resultado.'');
			break;

			case '4':
				if ($salida == 1) 
				{
					$resultado = $valor * 0.00001;
				}

				else
				{
					if ($salida == 2) 
					{
						$resultado = $valor * 0.01;
					}

					else
					 {
						if ($salida == 3) 
						{
							$resultado = $valor * 0.393701;
						}
						else
						{
							if ($salida ==4)
							 {
								$resultado = $valor * 1;
							}
						}
					}
				}

				header('Location: ../ejer4.php?res='.$resultado.'');
				break;
	default:
		# code...
		break;
}

 ?>