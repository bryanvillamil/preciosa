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
  	 <title>:: My TeSoRo::</title>
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
                  <h1>Miercoles 29 de Mayo</h1>
                  <p>Jajajaja...bajaste tomamos gaseosa, al rato me dijiste que fuera por dos vasos
                   con agua, pedimos dos pitillos y comenzamos hacer ejercicios de respiracion (para el saxo)
                    pero como cosa rara no me lo tome enserio y meti mi pitilo en tu vaso y comence a 
                    tomarme el agua luego cuando terminamos con el agua encontre un volante de un supermercado
                     comenzamos a molestar y a tirar papeles casualmente todoos me caian dentro el uniforme 
                     jajajaja... despues nos fuimos para la cancha a tirar piedras y a molestar te acompañe 
                     hasta el puente y yap.
                     </p>
              </header>
              <br>
              <br>
              <header>
                  <h1>Sabado 15 de Junio</h1>
                  <p>Ese dia bajaste en el "tiburon rojo" jajaja llegaste a la casa de gladys nos quedamos 
                  en las escalas molestando y hablando bobadas. hicimos una promesa ¿Recuerdas? prometimos 
                  que si tu y yo no nos casabamos tu le ponias a tu hija tu nombre o si era hijo seria camilo... 
                  y que yo si era niño le pondria bryan.. y que si era niña que como yo quisiera. 
                  </p>
              </header>
              <br>
              <br>
              <header>
                  <h1>Lunes 24 de Junio</h1>
                  <p>Ese dia salimos... y bajamos a la 45 comimos helado a la subida saliste corriendo y no 
                  me dejabas alcansarte. cuando te alcanze me comensaste a decir chiquita,enana, alegona y me 
                  hice la indignada y segui adelante... la verdad eso siempre lo hago porque se que tu sales 
                  de tras de mi y me abrazas... Cuando llegamos al parque comenzaste a despedirte de yo comence 
                  a llorar y casualmente comenzo a llover nos pegamos mera mojada pero valio la pena luego pasamos 
                  por la cancha cogiste agua "esa toda sucia y toda cochina, y me la tiraste en la cara... GASSS 
                  casi te mato sali corriendo detras de ti pero no te alcanze... intente, luche y volvia a intentar 
                  mojarte pero no pude." 
                  </p>
              </header>
          </article>     
            
      </div>

    <div class="buttons">

        <a href="pagina8.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina10.php" class="btn-sig">
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
