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

<body class="paginas pag-14">

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
                        <h1>Estas preciosa (Tus 15)</h1>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Yo me porte fuicioso</h2>
                            <h3 class="subtitle">Sabado 2 de Noviembre</h3>
                        </div>
                        <div class="descripcion">
                            <p>El dia de mis quince. este dia era yo el centro de atencion todos querian hablarme,
                                saludarme, darme picos y abrazos, pero yo solo pensaba en ti...en no dejarte solo para
                                que no te aburrieras y para que esas lanzadas casquilleras de caunces no intentaran nada
                                contigo.. Llegaste temprano, no sabia que hacer, debias esperar hasta que fuera la hora
                                del culto. conociste a mi tia mis primos, dos amigas, luego en la iglesia conociste a mi
                                otra familia. fue una noche larga, me dijiste unas palabras tan lindas que todas las de
                                caunces se querian morir decian que tan tierno, que tan especial,, tan detallista mejor
                                dicho hablaron maravillas de ti; despues que se termino todo no sabian que hacer vera y
                                tu decidieron coger taxi. Bueno si una historia toda larga jajaja, Te amo gracias por
                                estar conmigo en los mejores pero tambien en los peores momentos
                            </p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Campamentooo</h2>
                            <h3 class="subtitle">Sabado 9 de Noviembre</h3>
                        </div>
                        <div class="descripcion">
                            <p>Primer dia del campamento de caunces en copacabana.Pero antes debo recordar lo que
                                paso antes de irnos para la iglesia, el dia antes habiamos quedado en que llegarias muy
                                temprano para poder organizar todo y que no nos cogiera la tarde llegaste como a las
                                7:30 AM y yo no me habia organizado.Termine de organizarme te servi el desayuno termine
                                de empacar algunas cositas que hacian falta y luego arrancamos para la iglesia...
                                esperamos el bus y bueno arrancamos pero nos toco parar en la casa del pastor a recoger
                                mercado, te bajaste a ayudar quedaste oliendo a cebolla pero no importa. hay si arrancamos
                                de verdad pense que el camino hiba hacer mas largo pero no, se me hizo cortico y divertido.
                                llegamos y nos toco caminar hasta la finca porque el bus no entraba hasta alla. Luego no
                                sabiamos que hacer comenzamos a recorrer la finca, a molestar, a tocar bateria, teniamos
                                un hambre horrible el almuerzo fue como a las 4 fue horrible. armamos las carpas y nos
                                quedamos esperando que llegaran los demas. Llegaron, luego comenzo la apertura del campamento,
                                nos dieron los fichos para la comida, un corazon que debiamos marcar con el nombre de cada uno,
                                la escarapela, el lapicero y la programacion y luego a comer se dijo; terminamos de comer y
                                pal culto, se termino el culto y pasaron dos cosas que obvio no voy a mencionar !Te amOoO¡.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina13.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina15.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>
