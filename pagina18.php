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


  	 <link rel="stylesheet" type="text/css" href="css/pagina18.css">
     <link href='http://fonts.googleapis.com/css?family=IM+Fell+English+SC|Nova+Oval|
     Permanent+Marker|Fredericka+the+Great|Combo|Petit+Formal+Script|Marck+Script|Lobster|
     Gochi+Hand|Pacifico|Indie+Flower|Amatic+SC:400,700|Freckle+Face|Courgette|Handlee|
     Jacques+Francois+Shadow|Rock+Salt|Ribeye+Marrow|Kaushan+Script|Kranky' rel='stylesheet' 
     type='text/css'>
     <link rel="stylesheet" href="css/normalize.min.css">

     <!--................librerias de jquery............-->
     <script src="jquery/jquery-1.6.3.min.js"></script>
     <script type="text/javascript" src="jquery/jquery-ui.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>


  </head>

  <body link="red" vlink="red" alink="red"><!--codigo para que link no cambien de color-->

     <header>
     	    <!-- cabecera de pagina-->
 
     </header>
     <hr>
     <br>


<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
               
               <!-- recuadro principal de la pagina -->
      <div id="contenedor">  
            
            <div class="portada">
                 <img src="img/tengoganasdeti/h.gif" class="img-portada">

                 <div id="contenido">
                    <img src="img/tengoganasdeti/tgt.gif" class="uno">
                    <img src="img/tengoganasdeti/kyb.gif" class="dos">
                    <img src="img/tengoganasdeti/odio.gif" class="tres"><br>
                    <img src="img/tengoganasdeti/byk.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/te amo.jpg" class="cinco">
                    <img src="img/tengoganasdeti/kmi.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/tengo.jpg" class="cinco">
                    <img src="img/tengoganasdeti/gin.gif" class="ocho"><br>
                    <img src="img/tengoganasdeti/cuando estoy contigo.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/kmi y bray.jpg" class="cinco">
                    <img src="img/tengoganasdeti/carta de h.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/original.jpg" class="cinco">
                    <img src="img/tengoganasdeti/feita.jpg" class="seis"><br>
                    <img src="img/tengoganasdeti/br.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/quiero escaparme contigo.jpg" class="cinco">
                    <img src="img/tengoganasdeti/tu y yo.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/t.jpg" class="cinco">
                 </div>
            </div>
              
      </div>

    <div class="buttons">

        <a href="pagina17.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina19.php" class="btn-sig">
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
