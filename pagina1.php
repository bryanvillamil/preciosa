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
  	 <title>:: Te AdOrO::</title>

     <!--include de cabecera con los link-->
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
                  <h1>Domingo 10 de Febrero</h1>
                  <p>Apenas te empece hablar, fue algo muy charro; Recuerdo que empezamos 
                  con una "entrevista" bastante boba, Me caiste super bien, bajamos juntos 
                  hasta la carretera hablando de tu trabajo como "vendedor" Decias que vendias
                  los bananos mas ricos, que por eso todo el dia comias bananos pero que para
                  variar hacias sancocho de banano,sopa de banano, arroz de banano, jugo de 
                  banano... Me hiciste reir mucho.</p>
              </header>
              <br>
              <header>
                  <h1>Martes 12 de Febrero</h1>
                  <p>Despues del culto camine contigo hasta la carretera en el camino me contaste 
                  muchas cosas sobre tu vida y tambien te conte varias, Me contaste como te 
                  apuñalearon me mostraste las cicatrices... Si lo se apenas me las mostraste puse 
                  cara de terror y de susto jejeje;  Me regalaste unas galletas bridge de chocolate, 
                  Tambien me preguntaste varias cosas de edian.</p>
              </header>
              <br>
              <header>
                  <h1>Sabado 23 de Febrero</h1>
                  <p>Recuerdo que este dia nos acompañaste hasta mi casa, Me prestaste tu biblia 
                  que despues se convirtio en nuestra... Recuerdo que tenias el camibuso cafe y 
                  como empezo a llovisnar se lo prestaste a Izza. :(</p>
              </header>
              <br>
              <header>
                  <h1>Domingo 24 de Febrero</h1>
                  <p>Subimos donde Tatiana Hincapie(la brutica)...ese dia paramos en el parque a comer, 
                  Recuerdo que dijiste : "Edian con el permiso suyo pero Camila esta muy linda". Despues 
                  cuando salimos de la panadeia se me iva a quedar tu biblia; Pero izza me hizo caer en 
                  cuenta,... Cuando ibamos de bajada para la casa fue cuando me comenzaste a decir que  
                  ibas a orar para que el señor me despertara el amor por ti, que la oracion del justo 
                  puede... Te Quieroo.</p>
              </header>
              <br>
          </article>       
            
      </div>

    <div class="buttons">

        <a href="home.php" class="btn-ant">
            <img src="img/x.png" alt=""/>
            Anterior
        </a>

        <a href="pagina2.php" class="btn-sig">
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
