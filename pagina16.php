 <?php
  include ("conexion.php");
  session_start();
  if(!isset($_SESSION["nombre"]) ){
    die("<h1><center>ERROR 401 ACCESO NO AUTORIZADO DEBES LOGUEARTE CAMILA</center></h1>");
  }else{
    
  ?>
  <!DOCTYPE html>
  <html>
  <head>
     <meta charset="UTF-8">
     <title>::FeItA::</title>
     
     <!--................Css con fonts para estilos de letra............--> 

     <link rel="stylesheet" type="text/css" href="css/pagina16.css">
     <link href='http://fonts.googleapis.com/css?family=Nova+Oval|
     Permanent+Marker|Fredericka+the+Great|Combo|Petit+Formal+Script|Marck+Script|Lobster|
     Gochi+Hand|Pacifico|Indie+Flower|Freckle+Face|Courgette|Handlee|
     Jacques+Francois+Shadow|Rock+Salt|Ribeye+Marrow|Kaushan+Script|Kranky' rel='stylesheet' 
     type='text/css'>
     <link rel="stylesheet" href="css/normalize.min.css">

     <!--................librerias de jquery............-->
     <script src="jquery/jquery-1.6.3.min.js"></script>
     <script type="text/javascript" src="jquery/jquery-ui.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>

  </head>

  <body link="red" vlink="red" alink="red" class="pag"><!--codigo para que link no cambien de color-->

     <header>
          <!-- cabecera de pagina-->
 
     </header>
     <hr>
     <br>
<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
 
          <!-- texto de bienvenida -->
      <div class="bienv">
           <br>
           <?php
           echo "::Hola ".$_SESSION['nombre'];
           ?>
  	  </div>

      <div class="salir">
          <a href="salir.php">Exit</a>
      </div>

<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
               
               <!-- recuadro principal de la pagina -->
      <div class="ppal">
       <br>
       <br>
      <div id="nombre">
        <h1>...El nombre que hace que me desvele cada Dia...</h1>
      </div>

        <script>
            alert('HAS CLICK EN EL CUADRO QUE QUIERAS PARA DESCRIBIR...');
        </script>


          <div class="cuad">
            <img src="img/nombres/cami.jpg" class="imgcj">
          </div>
          <div class="cuad2">
            <img src="img/nombres/cami2.jpg" class="imgcj">
          </div> 
          <div class="cuad3">
            <img src="img/nombres/cami3.jpg" class="imgcj">
          </div>
          <div class="cuad4">
            <img src="img/nombres/cami4.jpg" class="imgcj">
          </div>
          <div class="cuad">
            <img src="img/nombres/cami5.png" class="imgcj">
          </div> 
          <div class="cuad2">
            <img src="img/nombres/cami6.png" class="imgcj">
          </div>
          <div class="cuad3">
            <img src="img/nombres/cami7.jpg" class="imgcj">
          </div>
          <div class="cuad4">
            <img src="img/nombres/cami8.gif" class="imgcj">
          </div> 
          <div class="cuad">
            <img src="img/nombres/cami9.png" class="imgcj">
          </div>
           <div class="cuad2">
            <img src="img/nombres/cami10.jpg" class="imgcj">
          </div> 
          <div class="cuad3">
            <img src="img/nombres/cami11.jpg" class="imgcj">
          </div>
          <div class="cuad4">
            <img src="img/nombres/cami12.jpg" class="imgcj">
          </div>
          <div class="cuad">
            <img src="img/nombres/cami13.jpg" class="imgcj">
          </div> 
          <div class="cuad2">
            <img src="img/nombres/cami14.jpg" class="imgcj">
          </div>
          <div class="cuad3">
            <img src="img/nombres/cami15.jpg" class="imgcj">
          </div>
          <div class="cuad4">
            <img src="img/nombres/cami16.jpg" class="imgcj">
          </div>         
            
      </div>

    <div class="buttons">

        <a href="pagina15.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina17.php" class="btn-sig">
            <img src="img/chulo.png" alt=""/>
            Siguiente
        </a>
       
    </div>
      

             <!--fin de cuadro de imagenes de premios de base de datos-->
<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
     
     

      <!--pie de pagina con nombre y año-->
      <?php include 'inc/footer_common.php'; ?>



<!--0_________________________________________________________________________________________________________________________________________________________________________0-->


<!--0_________________________________________________________________________________________________________________________________________________________________________0-->

  </body>
  </html>
<?php
}
?>
