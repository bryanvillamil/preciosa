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
                  <h1>Domingo 31 de Marzo</h1>
                  <p>Me trasnoche un poco contigo tonces me csto un poco levantarme pero lo logre me 
                  arregle me puse falda que te encanta. Despues de la dominical estaba muy nerviosa pero 
                  feliz porque era el dia de mi bautismo casi no hablamos. Despues nos tenian una sorpresa 
                  cosa que no sabia te mande un mensaje para que fueras a mi casa llegaste con posi tabas 
                  too lindo,nos qedamos hasta tarde en el balcon como cosa rara haciendo bobadas jajaja. 
                  Pero luego recuerdo que me miraste a los ojos y no me quitabas la mirada luego dijiste: 
                  "cami usted y yo somos casi que... MMM solo me falta hacerte la pregunta... y yo que 
                  pregunta: " me dijiste : "Cami te gustaria ser mi novia." oOh muerome entierrome resusitame 
                  obvioo pense dentro de mi. Pero no te respondi asi te dije si con una sonrisa y un acento BOBO. 
                  que parecia lela asi me pones TU. miramos el reloj eran como las 11:40 PM eso nunca se me va a 
                  olvidar... Bryan villamil acevedo te adoro mi noviooo. ahh se me olvidaba dijimos que como no 
                  siempre habian 31 entonces cumpliriamos los primeros(1). </p>
              </header>
              <header>
                  <h1>Viernes 5 de Abril</h1>
                    <p>----NO IMPORTA- LILI GODMAN---</p>
                  <!-- reproductor de audio-->      
                    <section>
                        <!--
                           (controls autoplay loop) : reproduce automaticamente carga.
                           (preload="auto" controls) : reproductor gris predeterminado pero hay que darle play para iniciar.
                        -->
                        <audio id="demo" src="music/no importa.mp3" preload="auto" controls></audio>
                    </section>
              </header>
              <header>
                  <h1>Domingo 7 de Abril</h1>
                  <p>El sabado me dijiste que si saliamos con todos yo acepte me dijsite 3:30 en punto pero 
                  luego Noo a el señor se le ocurrio que mejor a las 3 en punto corri me arregle super rapido 
                  cuando subi vi lo mas lindo que mis ojos pudieran observar que es? eso es obvio TU.
                  llegamos y me hicieron dar pena "Manada de patos" 
                  jajajaja casualmente a yosi le dio por mirar que peliculas habian en cartelera mensiono varias 
                  y cuando dijo "OZ EL PODEROSO" bruno comenzo a ladrar y tu y yo nos morimos de la risa. Nos 
                  quedamos un buen rato en la casa del gordo luego salimos en el taxi del suegro de tatoos uno 
                  encima de otro pero bueno, llegamos al premium almorzamos lasagña y un Miniheladito luego hicimos 
                  un recorrido y entramos al iglu casi me congelo y preferiste salir para cuidarme, salimos y 
                  me diste un beso de eses que dejan sin aliento... al rato salieron diana y el gordo pero yosi y 
                  pao nada que salian jajajajaja. luego fuimos y le mostramos la terraza a los muchachos,nos quedamos 
                  un rato y luego salimos... "VICENTE" ya nos estaba esperando, nos subimos... "va una mas (pao)" 
                  jajajajaja, llegamos a itagui jugaron manada de malos.... Mentiras luego te enojaste un poquito porque 
                  jader me mando un mensaje pero luego te contentaste, bueno te contente. Otro mas dijo "VICENTE" siii 
                  subio pipe jajajaja tire mucha caja luego fuimos donde pao y ya pa la casa me acompañaste hasta la casa 
                  y te fuiste. UFF meroo dia casi todo con tigo ¡LO MEJOoOoOR!.</p>
              </header>
          </article>       
            
      </div>

    <div class="buttons">

        <a href="pagina4.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina6.php" class="btn-sig">
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
