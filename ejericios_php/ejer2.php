<!DOCTYPE html>
<html lang="en">
<head>

<?php 
  
  $total1 = $_GET['res'];


 ?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ceferina</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo"><img id="logo" src="img/logo.png"></a>
     <ul class="right hide-on-med-and-down">
        <li><a href="ejer1.php?res=0">Ejercicio 1</a></li>
         <li><a href="ejer2.php?res=0">Ejercicio 2</a></li>
          <li><a href="  ejer3.php?bruto=0&inss=0&ir=0&total=0">Ejercicio 3</a></li>
           <li><a href="ejer4.php?res=0">Ejercicio 4</a></li>
      </ul>


      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h2 class="header center orange-text">Calculo de IMC</h2>
      </div>
  </div>
 <div class="row">
    <div class="container">
      <div class="input-field col s12">
       
        <div class="col s6">

        <form method="post" action="inc/eje2.php">
           <div class="input-field col s12">
            <i class="material-icons prefix">track_changes</i>
          <input name="peso" id="peso" type="text" required onkeypress="return validar(e) " class="validate">
          <label for="peso">Peso (Kg)</label>
          <br>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">toc</i>
        
          <input name="altura" id="altura" type="text" required onkeypress="return validar(e) " class="validate">
          <label for="altura">Altura (M)</label>
        </div>
        <div class="row">
   

            <div class="row center">
              <div class="container">
                  <button class="btn waves-effect waves-light" type="submit" >Enviar
    <i class="material-icons right">send</i>
  </button>
 
       </div>
            </div>
        </div>
     
        </form>
          
   

        </div>
        <div class="col s6">
                   <div class="row">
    
        <div class="input-field col s12">
          <i class="material-icons prefix">done_all</i>
          <input name="total" id="total" type="text" disabled value="<?php echo $total1; ?>" class="validate">
          <label id="este"  for="total">Su indice de masa corporal  es:</label>
        </div>
    
  </div>
        </div>
      </div>
    </div>
  </div>


  
     <br>
      <br>
  <footer class="page-footer blue">
 
    <div class="footer-copyright">
      <div class="container">
      Hecho por <a class="orange-text text-lighten-3" href="http://materializecss.com">Ceferina</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
       
  </script>

  </body>
</html>
