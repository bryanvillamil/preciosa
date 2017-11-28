<!DOCTYPE html>
    <script>
        if (localStorage.getItem("logueado") == "true") {

        }else {
            window.location = "/preciosa/login.php";
        }
    </script>
<html>
<head>
    <title>:: My BebE::</title>
    <?php include 'inc/head_common.php'; ?>
</head>

<body class="paginas pag-7">

    <!-- include MenuMobil-->
    <?php include 'inc/menuMobile.php'; ?>
    
    <div id="wrapper">
        <!-- include en el que esta el logo con el nombre con los fondos de los lados blancos en hd-->
        <?php include 'inc/header.php'; ?>

        <!-- recuadro principal de la pagina -->
        <div class="contenedor">  
            <div class="container">
                <article>
                    <div class="titulo">
                        <h1>titulo</h1>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Lunes 13 de Mayo </h2>
                        </div>
                        <div class="descripcion">
                            <p>Promesa del anillo</p>
                            <img src="img/anillo.jpg" alt=""/>
                            <br>
                            <p>Ese dia llegaste a mi casa con gerson se quedaron un ratico y luego subieron al parque 
                                por unas empanadas yo me quede en el balcon. tu, gerson y santiago se fueron a jugar... gerson 
                                se lastimo la rodilla y tu mejor lo llevaste a su casa, luego cuando volviste  nos quedamos en 
                                las escalas hablando luego sacaste 2 next te comiste uno y me diste el otro a mi. recuerdo que 
                                mi papelito lo meti en tu billetera y dijiste que de ahi no iba a sair y sonreimos.. el tuyo 
                                lo meti en la reja.. y cuando te fuiste lo cogi y hasta el dia de hoy esta en mi biblia. te dije 
                                que queria comprar 2 anillos uno para ti y tro para mi obvio; me prometiste que los comprarias.
                            </p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Miercoles 15 de Mayo</h2>
                        </div>
                        <div class="descripcion">
                            <p>Estabamos muy contentos comiendo de lo lindo hasta subiste a la 80 por unas 
                                empanadas que me encantaban. estabamos tan felices hasta que subi izza me llamo 
                                y al momentico recibi una llamada que para mi sorpresa era maryi solo me dijo 
                                "Me hace el favor y me pasa a bryan" te pase, tu sabes que tenia mucha rabia luego 
                                colgaste y comenzamos a discutir, discutimos muy feo. luego me llego un mensaje de 
                                jader y hasta ahi te llego la paciencia... arrancaste con mucha rabia para donde el. 
                            cuando volviste seguimos discutiendo. pero cuando te fuiste NO quedamos peliados.</p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Sabado 25 de Mayo</h2>
                        </div>
                        <div class="descripcion">
                            <p>Como hacia mas de 8 dias habiamos terminado nos reencontramos hablamos me prestaste 
                                tu buso y luego hablamos por mensajes hasta muy tarde. ese dia volvimos me sentia super 
                            contenta y no se porque pero creo que tu tambien te pusiste feliz.</p>
                        </div>
                    </div>
                </article>
            </div>       
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina6.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina8.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div> 

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>

