<!DOCTYPE html>
<script>
    if (localStorage.getItem("logueado") == "true") {

    }else {
        window.location = "./index.php";
    }
</script>
<html>
<head>
    <title>::FeItA::</title>
    <?php include 'inc/head_common.php'; ?>
</head>

<body class="paginas pag-12">

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
                        <h1>Solo te amo a ti</h1>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Solo quiero estar contigo</h2>
                            <h3 class="subtitle">Lunes 14 de Octubre</h3>
                        </div>
                        <div class="descripcion">
                            <p>Dias despues habia llegado a la casa de jader a quedarme... cosa que no te gusto, es
                                mas te desiluciono; Ese dia estaba molestando con izza y tatiana escuche que gritaron
                                Camila para mi sorpresa eraas tu, me preguntaste que si podias bajar, baje y me saludaste
                                me pediste que te escuchara que me necesitabas, que necesitabas hablar con alguien y en
                                ese momento solo pensaste en mi. Comenzaste a contarme tus problemas, decias que no podias
                                mas, que solo te tranquilizabas en un culto. que en ese momento y al estar conmigo te
                                sentias super tranquilo y sin problemas, me agradecias una y otra vez el hecho de estar ahi
                                en ese lugar escuchandote; Me dijiste dijiste que te diera otra oportunidad que te querias
                                olvidar de maryi; sacartela de la cabeza y que solo conmigo lo podias lograr, me pedias que
                                no te diera la espalda... Dijite que si pudieras escoger a alguien para ser tu esposa esa
                                seria Yo que sabias que yo te haria feliz; te cuidaria, enamoraria profundamente; te dije
                                que no queria que me hicieras mas daño que tenia que pensarlo. me invitaste a salir dije
                                que SI. te fuiste y me quede pensando toda la noche que respuesta te daria... la verdad no
                                sabia que hacer.
                            </p>
                        </div>
                    </div>
                    <div class="caja imagen">
                        <img src="styles/img/oportunidad.jpg" class="oportu">
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Te ganare de nuevo</h2>
                            <h3 class="subtitle">Martes 15 de Octubre</h3>
                        </div>
                        <div class="descripcion">
                            <p>Sono el telefono de la casa de jader me sorprendio que fueras TU, jamas pense
                                que tuvieras el valor para llamarme a esa casa, empece a notar tu empeño por GANARME
                                de nuevo me asustaba porque sabia que podias lograrlo muy facil, hablamos un ratico
                                y luego me fui a bañar, quedamos en encontrarnos en la casa de gladys para hablar antes
                                de irme, llegue con gerley como a los 2 minutos llegaste TU, yo tenia que entrar al
                                colegio pero estaba tarde y no pude me acompañaste hasta villahermosa por todo el camino
                                molestamos, nos reimos, jugamos, te pegue, me gozaste, te goze, en fin me gusto tu compañia...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina11.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina13.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>

