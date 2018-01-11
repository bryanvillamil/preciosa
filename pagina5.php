<!DOCTYPE html>
    <script>
        if (localStorage.getItem("user") != undefined)  {

        }else {
            window.location = "./index.php";
        }
    </script>
<html>
<head>
    <title>::FeItA::</title>
    <?php include 'inc/head_common.php'; ?>
</head>
<body class="paginas pag-5">

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
                        <h1>Una Gran Noche</h1>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Bautismo y algo mas</h2>
                            <h3 class="subtitle">Domingo 31 de Marzo</h3>
                        </div>
                        <div class="descripcion">
                            <p> Me trasnoche un poco contigo tonces me costo un poco levantarme pero lo logre me
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
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">No Importa</h2>
                            <h3 class="subtitle">Viernes 5 de Abril</h3>
                        </div>
                        <div class="descripcion">
                        <p class="tituNoimporta">NO IMPORTA- LILI GODMAN
                                <i class="fa fa-play-circle" aria-hidden="true"></i>
                                <i class="fa fa-music" aria-hidden="true"></i>
                                <i class="fa fa-headphones" aria-hidden="true"></i>
                        </p>
                            <!-- reproductor de audio-->
                            <section>
                                <!--
                                (controls autoplay loop) : reproduce automaticamente carga.
                                (preload="auto" controls) : reproductor gris predeterminado pero hay que darle play para iniciar.
                                -->
                                <img src="/preciosa/styles/img/no-importa.jpg" alt="">
                                <audio id="demo" src="music/no importa.mp3" preload="auto" controls autoplay loop></audio>
                            </section>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Salida con mis amigos</h2>
                            <h3 class="subtitle">Domingo 7 de Abril</h3>
                        </div>
                        <div class="descripcion">
                            <p>El sabado me dijiste que si saliamos con todos yo acepte me dijsite 3:30 en punto  pero
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
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina4.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina6.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>

