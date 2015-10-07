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
                  <h1>Jueves 15 de Agosto</h1>
                  <p>Mmmm... La verdad no pense encontrarte en la iglesia recuerdo que me fui
                   a saludar y a estar un rato con gladys y cuando sali no estabas habias salido 
                   con yosi... creo ... entonces subi a esperar a mi papa y cuando mire para 
                   abajo un loco corriendo por toda la calle cuando miro bien eras tu. Ese dia me 
                   dio mera felicidad. Te pregunte a que habias subido y me dijiste a saludarte 
                   !No me podia quedar sin saludarte WOOW casi caigo hay mismo me diste un "Max-combi" 
                   luego vimos que venia mi papa y te fuiste otra vez corriendo y con una sonrisa enorme 
                   yo me quede con risa de boba que me duro el resto de la semana¡  TE ADORO gracias por 
                   ser tan lindo...
                   </p>
              </header>
              <br>
              <header>
                  <h1>Viernes 30 de Agosto</h1>
                  <p>Fue la ultima vez que te vi... tenias una camiseta blanca el bluejeans que te encanta 
                  a mi tambien me gusta, unos converse azules todos lindos, una gorra azul oscura y un cabello 
                  negro que no parecia el tuyo; Fuimos a la "Casa" descubierta hablamos un ratico porque al 
                  poco tiempo llego mi papa, Te queria dejar sin gorra pero te pusiste un poco serio y mejor 
                  te la devolvi. cuando llegamos al semaforo estaba en rojo y casualmente tu estabas por ahi te 
                  comenze a hacer caras y luego arrancamos y hasta ahi te vi. :(
                  </p>
              </header>
             <header>
                <img src="img/cara1.gif" class="cara1">
                <img src="img/cara2.gif" class="cara2">
                <img src="img/cara3.gif" class="cara3">
             </header>
              
          </article>     
            
      </div>

    <div class="buttons">

        <a href="pagina10.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina12.php" class="btn-sig">
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
