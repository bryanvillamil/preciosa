<!DOCTYPE html>
    <script>
        if (localStorage.getItem("logueado") == "true") {

        }else {
            window.location = "./index.php";
        }
    </script>
<html>
<head>
    <title>:: PrInCeSiTa::</title>
    <!--include los links-->
    <?php include 'inc/head_common.php'; ?>
</head>
<body class="paginas pag-3">

    <!-- include MenuMobil-->
    <?php include 'inc/menuMobile.php'; ?>
    
    <div id="wrapper">
        <!-- include HEADER-->
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
                            <h2>Lunes 25 de Marzo</h2>
                        </div>
                        <div class="descripcion">
                            <p>Comenzaste desde temprano a recordarme que hibamos a salir la verdad me estaba 
                                muriendo del sueño, pero era de entender no habia dormido en toda la noche y estaba 
                                agotada; despues te dije que no salieramos porque tenia mucho sueño y queria descansar; 
                                Haay señor me llamaste con un tono muy elevado, con un poco de rabia, tristeza y 
                                desilucion, no me dejaste hablar la verdad estabas muy alterado
                                <br>
                                Luego en la noche llegaste, me mandaste a llamar con santiago sali muy despeinada, 
                                en unas fachas que mejor ni te acuerdes... me llevaste una chocolatina(Todavia tengo 
                                la envoltura) me pediste disculpas toO tierno y al rato te fuiste pero antes de irte me 
                            dijiste que la salida podria quedar para despues; dije que si para el miercoles.</p>
                        </div>  
                    </div>

                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Miercoles 27 de Marzo</h2>
                        </div> 
                        <div class="descripcion">
                            <p>Por fin la fecha que queria recordar, recuerdo que ese dia me levante temprano, me 
                                organice temprano pero debia salir con Shoa a comprar mmm la verdad n me acuerdo. Pero 
                                habiamos quedado de encontrarnos a las 3:00 pero cuando se llego la hora estaba en la 
                                45 ¡OoH NOO! me cogio jajaja
                                <br>
                                ya te estabas inpacientando ¡Calma, pronto llegare; Vale la pena esperar!, cuando subi, 
                                iva con gladys te escondiste, luego se fue apenas te vi dije: WaW " que creacion, mucho 
                                bebe papito rico"... cogimos el taxi, llegamos no sabiamos por donde entrar, luego subimos 
                                y no sabiamos que pelicula ver, nos quedamos un buen rato mirando yo queria ver "MAMA" Pero 
                                era muy tarde luego vimos el cartel de la supermegahiperrecontraextrema pelicula 
                                "OZ EL PODEROSO" te dije que si es maluca no me gozes, la pelicula mas charra que habia 
                                llegado a ver en mi vida, pero tengo el mejor recuerdo y es que fue contigo.Cuando estabamos 
                                adentro me puse super nerviosa, me preguntabas 1 y mil cosas no sabia que responder, parecia 
                                boba te cambiaba el tema o simplemente me reia. Salimos y me llevaste a comer algo super 
                                delicioso "MACFLURY", me encanto; Luego necesitaba un baño entre y cuando sali no te encontre 
                                por ninguna parte hasta que claro escondido detras de unas escalas que belleza como siempre todo 
                                plaga. luego fuimos y conocimos una terraza hermosa.. WIII la conocimos los 2 por primera vez tu 
                                me mirabas yo te miraba tenia unas ganas enormes de darte un beso pero me aguante... luego se hacia 
                                tarde y me olvidaba del reloj pero luego me volvia acordar y ya era tarde y debiamos irnos, 
                                cogimos el taxi y me pediste algo "UN BESO" yo acepte y me diste un rico y largo Beso. mmm que rico. 
                                Llegue a mi casa con una felicidad enorme se me habia olvidado todo el mundo pero tena que volver 
                                a mi realidad, Ahora tenia que tomar una decision seguir con Edian o Arriesgarme por ti "Pero BRYAN 
                                mata a EDIAN", me arriesgue y hasta ahora no me arrepiento.
                            </p>
                        </div>  
                    </div>

                    <img src="img/peli.jpg" class="peli">
                    <img src="img/oz.jpg" class="oz">
                    <img src="img/taxi.jpg" class="taxi">
                    <div class="beso">
                        <img src="img/beso.jpg" class="beso">
                    </div>
                </article>
            </div> 
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina2.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina4.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>  

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>
