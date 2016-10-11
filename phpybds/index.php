<?php

require('inc/conexion.php');

$consulta = "SELECT * From trabajo";
$resultado = $mysqli -> query($consulta);
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>PHP</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/estilos.css">

	</head>

	<body>

	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">one</a></li>
		<li><a href="#!">two</a></li>
		<li class="divider"></li>
		<li><a href="#!">three</a></li>
	</ul>
	<nav>
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo">PHPbds</a>
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="Administrar.php">Administrar</a></li>
				
			</ul>
			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				<li><a href="Administrar.php">Administrar</a></li>
			</ul>
		</div>
	</nav>
<br>



        <div class="row">
        <?php while ($fila=$resultado->fetch_assoc()){ ?>
      <div class="col s4">
        		<div class="card small teal">
        			<h4><?php echo $fila ['nombre']; ?></h4>
        			<hr>
        			<h4><?php echo $fila ['titulo']; ?></h4>
        		</div>
        	</div>
        	
        	  <?php } ?>
       
        	
        </div>
   

		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>