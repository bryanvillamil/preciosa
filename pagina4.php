<!DOCTYPE html>
    <script>
        if (localStorage.getItem("logueado") == "true") {

        }else {
            window.location = "./index.php";
        }
    </script>
<html>
<head>
    <title>:: Mi ToDo::</title>
    <?php include 'inc/head_common.php'; ?>
</head>
<body class="paginas pag-4">

    <!-- include MenuMobil-->
    <?php include 'inc/menuMobile.php'; ?>
    
    <div id="wrapper">
        <!-- include HEADER -->
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
                            <h2 class="title">Comenzando a soñar</h2>
                            <h3 class="subtitle">Jueves 28 de Marzo</h3>
                        </div>
                        <div class="descripcion">
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
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Te pille</h2>
                            <h3 class="subtitle">Viernes 29 de Marzo</h3>
                        </div>
                        <div class="descripcion">
                            <p>Desperte con tu buso oliendo delicioso y con un mensaje tuyo estaba super feliz aunque dormi 
                                en un mueble super incomoda pero bueno todo sea por mi bray, le conte todo a gladys estaba muy 
                                contenta y me animo mucho, luego en la tarde te quedaste sin saldo pero te vi en el culto salimos, 
                                subimos al parque pero tu te fuiste para donde el gordo, luego subi con jader para donde caro, pero 
                                no estaba te vi bajaste en vivax y posi en la moto de el al rato llego un mensaje con cierto regaño 
                                porque iba cogida de la mano con jader. luego baje para mi casa de una momento a otro me aburri 
                                mucho lloraba y lloraba porque no se pero tu llegaste e intentaste calmarme pero no fui capaz te 
                                fuiste y al ratoo me calme</p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">jajaja Tus descuidos</h2>
                            <h3 class="subtitle">Sabado 30 de Marzo</h3>
                        </div>
                        <div class="descripcion">
                            <p>OH NOO wilder llego al culto con tu buso... casi me matas bueno tampoco pero si te enojaste te 
                                pedi disculpas te hice ojitos y ya te calmaste luego estaba en la casa de jader arreglando los 
                                vestidos para el bautizo me llamaste e inmediatamente sali casi corriendo hacia ti te queria ver y 
                                darte un beso cosa que no se pudo pero bueno ese dia fue que conseguimos "Casa" jajajaja!... un poco 
                                descubierta pero normal, no nos quedamos hasta tarde porque debias madrugar y  yo tambien me despedi 
                            triste pero feliz; triste porque te hibas, y feliz porue te pude ver y estar contigo.</p>
                        </div>
                    </div>
                </article>
            </div>      
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina3.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina5.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div> 
        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>
