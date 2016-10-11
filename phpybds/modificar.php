<?php
require('inc/conexion.php');
$id = $_GET ['id'];
$consulta = "SELECT * From trabajo where id = '$id'";
$resultado = $mysqli -> query($consulta);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>PHP</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
				<li><a href="index.php">Inicio</a></li>
				
				
			</ul>
			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				<li><a href="index.php">Inicio</a></li>
			</ul>
		</div>
	</nav>
<br>
<br>

    <div class="row">
        <div class="col s12 ">
         <h3 class="center">Ingresar datos</h3>
         <br>
<br>
<?php while ($fila=$resultado->fetch_assoc()){ ?>
         <form  method="post" action="inc/modificar.php" class="col s12">

         <div class="col s12">
           <div class="row">
            <div class="">
        
          <input type="text" hidden name="id"  value="<?php echo $fila ['id']; ?>">
        </div>
        <div class="input-field col s6">

          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="nombres" value="<?php echo $fila ['nombre']; ?>" required class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
       
         <div class="">
        
        </div>
         </div>
     <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" value="<?php echo $fila ['titulo']; ?>" name="titulo" required class="validate">
          <label for="icon_prefix">Titulo</label>
        </div>
        </div>

         <div class="row">
           <div class="container">
             <div class="col s12">
               <div class="col s4"></div>
               <div class="col s4">
                    <button class="center btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        
                </div>
               <div class="col s4"></div>
             </div>
           </div>
         </div>
      
       
      
      
    </form>
     <?php } ?>
        </div>
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