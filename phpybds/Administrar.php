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

	 
  </ul>

            


  <div class="row">
  	<div class="container">
  		<div class="col s12 ">
  <h4 class="center">Control Trabajos</h4>
  <hr>
    <br>
  	         <table class="striped responsive-table" >
        <thead>
          <tr>
              <th data-field="id">Id</th>
             
              <th data-field="price">Nombre</th>
                  <th data-field="id">Titulo</th>
                  <th data-field="id">Operaciones</th>
           
          </tr>
        </thead>

        <tbody>
        <?php while ($fila=$resultado->fetch_assoc()){ ?>
          <tr>
      
        <td><?php echo $fila ['id']; ?></td>
      
        <td><?php echo $fila ['nombre']; ?></td>
        <td><?php echo $fila ['titulo']; ?></td>
     
     
      
        
        <td>  <a  href="modificar.php?id=<?php echo $fila['id'];?> " class=" tooltipped" data-position="left" data-delay="50" data-tooltip="Modificar"  ><i class="material-icons" style="color:#00897b ;">loop</i></a> 

        

           <a data-position="right" data-delay="50" data-tooltip="Eliminar" class=" tooltipped"  href="inc/eliminar.php?id=<?php echo $fila['id'];?>" ><i class="material-icons" style="color:#f44336 ;">delete</i></a> </td>
      </tr>
            <?php } ?>
        </tbody>
      </table>
  		</div>
  	</div>
  </div>

  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
     
      <div class="row">
        <div class="col s12 ">
         <h3 class="center">Ingresar datos</h3>
         <br>
<br>
         <form  method="post" action="inc/ingresar.php" class="col s12">

         <div class="col s12">
           <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="nombres" required class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
       
         <div class="">
        
        </div>
         </div>
     <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="titulo" required class="validate">
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
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
          

  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating blue btn modal-trigger" href="#modal1"><i class="material-icons">info</i></a></li>
      
    </ul>
  </div>
        

		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>

        <script type="text/javascript" >
        		 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
          
        </script>
	</body>
</html>