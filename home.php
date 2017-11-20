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
  	 <title>::Bienvenida Kmila::</title>
     

     <?php include ('inc/head_common.php'); ?>

  </head>

  <body><!--codigo para que link no cambien de color-->
    
     
<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
               
               <!-- recuadro principal de la pagina -->
      <div class="container">  

          <div id="slider">
              <div><img id="1" class="slider-img" src="img/ciudad.jpg"/></div>
              <div><img class="slider-img" src="img/ciudad2.jpg"/></div>
              <div><img class="slider-img" src="img/ciudad3.jpg"/></div>
          </div>


        <header id="nav" class="">
            <nav id="main">
                <ul class="menu">
                  <div>
                    <li class="alpha hover-cycle"><a class="menu1" href="#">Bienvenida kmila a</a></li>
                  </div>
                  <div>
                    <li class="hover-cycle"><a class="menu2" href="#">Nuestra Historia</a></li>
                  </div>
                  <div>
                    <li class="hover-cycle"><a class="menu3" href="#">Por fin</a></li>
                  </div>
                  <div>
                    <li class="hover-cycle"><a class="menu4" href="#">ha llegado el dia...</a></li>
                  </div>
                  <div>
                    <li class="hover-cycle"><a class="menu5" href="#">No te imaginas cuanto he esperado para esto</a></li>
                  </div>
                  <div>
                    <li class="hover-cycle"><a class="menu6" href="#">Att: bryan</a></li>
                  </div>
                </ul>
              <span></span>
            </nav>
        </header>
      </div>

       <!--fin de cuadro de imagenes de premios de base de datos-->
        <div class="buttons">
          <a href="pagina1.php" class="btn-sig">
              <img src="img/chulo.png" alt=""/>
            Siguiente
          </a>
        </div>
<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
     
     

      <!--pie de pagina con nombre y año-->
      <?php include 'inc/footer_common.php'; ?>



<!--0_________________________________________________________________________________________________________________________________________________________________________0-->


<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
      <script type="text/javascript">
            // pagina de home
        //------ imagenes de slider rapidas con gran fondo excelente

          $(function(){
              $('#slider div:gt(0)').hide();
              setInterval(function(){
                $('#slider div:first-child').fadeOut(0)
                   .next('div').fadeIn(0)
                   .end().appendTo('#slider');}, 300);

          });
      </script>
  </body>
  </html>
<?php
}
?>
