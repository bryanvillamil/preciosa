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
  	 <title>:: Mi CoSiTa::</title>
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
                  <h1>Sabado 25 de Mayo</h1>
                  <p>Como hacia mas de 8 dias habiamos terminado nos reencontramos hablamos me prestaste 
                  tu buso y luego hablamos por mensajes hasta muy tarde. ese dia volvimos me sentia super 
                  contenta y no se porque pero creo que tu tambien te pusiste feliz.</p>
              </header>
               <br>
              <header>
                  <h1>Domingo 26 de Mayo</h1>
                  <p>Ese dia salimos fuimos al mirador de san blas pero primro fuimos a encargar 
                  frisnas. Recuerdo que comenzo a llover.. juuum meros recuerdos... hasta que se te 
                  perdio la billetera te pusiste muy desesperadoempezaste a buscarla por todas partes 
                  donde habias pasado volviste al mirador, a la iglesia donde estaba el gordo pero no 
                  la encontramos. cuando trajiste al gordo el comenzo a reirse de ti.. y yo tambien no se 
                  porque... jejeje, te fuiste a llevar al gordo y luego llegaste por mi, me llevaste hasta 
                  el colegio cuando te ibas air me dijiste: "Yo porque soy tan demalas, lleno de deudas y 
                  enseguida se me pierde la billetera." me quede callada... miraste al piso, luego levante 
                  tu cabeza y te dije: "Amor aparecera..." luego te subiste y yo me fui para la casa.
                  </p>
              </header>
              <br>
              
              <header>
                  <h1>Lunes 27 de Mayo</h1>
                  <p>A medio dia me llego un mensaje tuyo diciendome la encontraron,la encontraron y yo que 
                  cosa?... pues la billetera, tengo que encontrarme con un señor un tal diego, en la noche 
                  bajaste a mi casa me contaste como fue que te devolvieron la billetera y luego me dijiste 
                  te tengo un regalo, me dijiste que cerrara los ojos y estirara la mano... me pusiste una 
                  chocolatina(Jet blanca) te reiste y me dijiste eso no es volvi a cerrar los ojos tomaste mi 
                  mano y me pusiste un anillo abrir los ojos y te mire y solo sonrei me quede sin palabras te 
                  abraze y luego te fuiste.</p>
              </header>
          </article>       
            
      </div>

    <div class="buttons">

        <a href="pagina7.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina9.php" class="btn-sig">
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
