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
  	 <title>:: Mi ToDo::</title>
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
                  <h1>Jueves 28 de Marzo</h1>
                  <p>Desperte y vi un mensaje tuyo, Maravilloso eso me alegro el dia pero era el dia 
                  que tenia que enfrentar mi problema, despues del culto me quede un rato afuera despues 
                  llego el momento de hablar con edian decirle que ya no mas,que ya no queria seguir al lado 
                  de el, hablamos y me quite un peso de encima... Cuando llegue estabas tu, el gordo, posi, 
                  misso, diana, las zabalas en la cas de gladys. luego todos se fueron quedamos tu y yo, nos 
                  fuimos para los lados de la cancha nos quedamos hasta muy tarde como hasta las 3 AM, en ese 
                  lugar imaginamos muchas cosas, pensamos en nuestros hijos, y ahi fue donde la biblia no era 
                  una simple biblia sino nuestra hija la intercesora para que tu y yo nos unieramos , nos besamos 
                  casi toda la noche y queriamos detener el tiempo y el mundo pero fue imposible. te fuiste casi 
                  lloro pero no podia quedarme mas contigo.</p>
              </header>
              <br>
              <header>
                  <h1>Viernes 29 de Marzo</h1>
                  <p>Desperte con tu buso oliendo delicioso y con un mensaje tuyo estaba super feliz aunque dormi 
                  en un mueble super incomoda pero bueno todo sea por mi bray, le conte todo a gladys estaba muy 
                  contenta y me animo mucho, luego en la tarde te quedaste sin saldo pero te vi en el culto salimos, 
                  subimos al parque pero tu te fuiste para donde el gordo, luego subi con jader para donde caro, pero 
                  no estaba te vi bajaste en vivax y posi en la moto de el al rato llego un mensaje con cierto regaño 
                  porque hiba cogida de la mano con jader. luego baje para mi casa de una momento a otro me aburri 
                  mucho lloraba y lloraba porque no se pero tu llegaste e intentaste calmarme pero no fui capaz te 
                  fuiste y al ratoo me calme</p>
              </header>
              <br>
              <header>
                  <h1>Sabado 30 de Marzo</h1>
                  <p>OH NOO wilder llego al culto con tu buso... casi me matas bueno tampoco pero si te enojaste te 
                  pedi disculpas te hice ojitos y ya te calmaste luego estaba en la casa de jader arreglando los 
                  vestidos para el bautizo me llamaste e inmediatamente sali casi corriendo hacia ti te queria ver y 
                  darte un beso cosa que no se pudo pero bueno ese dia fue que conseguimos "Casa" jajajaja!... un poco 
                  descubierta pero normal, no nos quedamos hasta tarde porque debias madrugar y  yo tambien me despedi 
                  triste pero feliz; triste porque te hibas, y feliz porue te pude ver y estar contigo.</p>
              </header>
          </article>     
            
      </div>

    <div class="buttons">

        <a href="pagina3.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina5.php" class="btn-sig">
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
