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
     <?php include 'inc/head_common.php'; ?>
  </head>

  <body link="red" vlink="red" alink="red"><!--codigo para que link no cambien de color-->

     
<!-- include en el que esta el logo con el nombre con los fondos de los lados blancos en hd-->
     <?php include 'inc/header.php'; ?>



<!--0_________________________________________________________________________________________________________________________________________________________________________0-->
               
               <!-- recuadro principal de la pagina -->
      <div class="text"> 
          <article>
              <header>
                  <h1>Martes 15 de Octubre</h1>
                  <p>Sono el telefono de la casa de jader me sorprendio que fueras TU, jamas pense 
                  que tuvieras el valor para llamarme a esa casa, empece a notar tu empeño por GANARME 
                  de nuevo me asustaba porque sabia que podias lograrlo muy facil, hablamos un ratico 
                  y luego me fui a bañar, quedamos en encontrarnos en la casa de gladys para hablar antes 
                  de irme, llegue con gerley como a los 2 minutos llegaste TU, yo tenia que entrar al 
                  colegio pero estaba tarde y no pude me acompañaste hasta villahermosa por todo el camino 
                  molestamos, nos reimos, jugamos, te pegue, me gozaste, te goze, en fin me gusto tu compañia...
                  </p>
              </header>

              <header>
                  <h1>Viernes 18 de Octubre</h1>
                  <p>Este dia hibamos a salir quedamos de encontrarnos a la 1 en san ignacio (Donde siempre) 
                  como cosa rara llegue tarde pero no fue algo asi que !WOW¡ que tarde mmm, bueno solo 20 minutos 
                  tarde. jajaja llegue y ahi estabas esperandome y pensando que quiza no hiria, me dijiste que 
                  estaba hermosa... mentiroso... al tiempo me dijiste que esa camisa con la que fui era horrible y 
                  como practicamente vivo para complacerte y hacerte feliz no me la volvi a poner. del parque de 
                  san ignacion nos fuimos caminando hasta la estacion san antonio de ahi cogimos metro y fuimos hasta 
                  el premium plaza, caminamos, nos reimos, entramos a jumbo a ver que comprabamos, compramos muchas 
                  cositas y cuando estabamos en la seccion de panaderia se te salio algo asi como !AMOR...¡ yo te mire 
                  raro y tu me dijiste: "Te puedo decir amor de cariño" jajaja. 
                  <br>
                  <br>

                  !TE AMO MI VIDA, TE AMO¡... luego subimos a la terraza almorzamos, y nos comimos ese monton de 
                  merkato. luego me pediste perdon por aquel "inconveniente" y me preguntaste. si queria volver a 
                  ser tu novia y obvio mi respuesta fue SIIII... gracias por ese maravilloso dia.
                  </p>
              </header>

              <header>
                  <h1>30 de Octubre</h1>
                  <p>Enserio pense que no vendrias entonces no me organize y es mas jader me llamo y me dijo que si iba 
                  a mi casa y yo le dije que si que bueno. Pero para mi sorpresa si llegaste jajaja. Recuerdo que estaba 
                  haciendo unos patacones para el algo y me dijeron que saliera que habias llegado tu, no crei pero sali 
                  para salir de dudas y cuando sali OoH, SORPRESA estabas parado con una bolsa de regalo que traia a mi 
                  hijo mi hermoso JOSEPH; y una chocolatina y en la otra mano un globo de corazon que decia te quiero; 
                  fue tan emocionante que mmmmm bueno aunque haya negado lo que santiago dijo que me vio llorando... 
                  hoy lo voy a aceptar si me puse a llorar pero de la felicidad; gracias por ser tan tierno, lindo, 
                  especial y detallista conmigo; Te amoOoO. y como te dije ese dia fue mi mejor cumpleaños !TE AMOoOoOoO¡. 
                  </p>
              </header>
          </article>       
            
      </div>

    <div class="buttons">

        <a href="pagina12.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina14.php" class="btn-sig">
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
