<!DOCTYPE html>
    <script>
        if (localStorage.getItem("logueado") == "true") {

        }else {
            window.location = "./index.php";
        }
    </script>
<html>
<head>
    <title>:: My TeSoRo::</title>
    <?php include 'inc/head_common.php'; ?>
</head>

<body class="paginas pag-9">
    
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
                            <h2 class="title">El tiburon Rojo</h2>
                            <h3 class="subtitle">Sabado 15 de Junio</h3>
                        </div>
                        <div class="descripcion">
                            <p>Ese dia bajaste en el "tiburon rojo" jajaja llegaste a la casa de gladys nos quedamos 
                                en las escalas molestando y hablando bobadas. hicimos una promesa ¿Recuerdas? prometimos 
                                que si tu y yo no nos casabamos tu le ponias a tu hija tu nombre o si era hijo seria camilo... 
                                y que yo si era niño le pondria bryan.. y que si era niña que como yo quisiera. 
                            </p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">A veces me paso jugando</h2>
                            <h3 class="subtitle">Lunes 24 de Junio</h3>
                        </div>
                        <div class="descripcion">
                            <p>Ese dia salimos... y bajamos a la 45 comimos helado a la subida saliste corriendo y no me dejabas alcanzarte. cuando te alcanze me comensaste a decir chiquita,enana, alegona y me hice la indignada y segui adelante... la verdad eso siempre lo hago porque se que tu sales de tras de mi y me abrazas... Cuando llegamos al parque comenzaste a despedirte de yo comence a llorar y casualmente comenzo a llover nos pegamos mera mojada pero valio la pena luego pasamos por la cancha cogiste agua "esa toda sucia y toda cochina, y me la tiraste en la cara... GASSS casi te mato sali corriendo detras de ti pero no te alcanze... intente, luche y volvia a intentar mojarte pero no pude." 
                            </p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Se nos perdio la plata jajaja (Santa Elena)</h2>
                            <h3 class="subtitle">Viernes 5 de Julio</h3>
                        </div>
                        <div class="descripcion">
                            <p>Gracias... comienzo diciendo gracias, te preguntaras ¿porque? mira la respuesta
                                es muy sencilla por haberme dado tantos momentos buenos este fue uno de ellos ese 
                                dia llegue un poquito retrasada, ensegueda llegue al exito que no era, pero bueno 
                                no sabiamos que hacer o para donde ir.Decidimos subir al parque arvii, "Meroo frio", 
                                pero con tus abrazos y besos ese frio se fue disminuyendo. cuando llegamos me tomaste 
                                una foto al lado de unas flores... luego seguimos caminando y pasamos por donde vendian 
                                arepique y como querias seguir mis caprichos me compraste uno (todavia existe la 
                                conchita), nos tomamos muchas fotos super hermosas pero no se como desaparecieron de tu 
                                celular... luego cuando hibamos a venir se nos perdio la plata de los pasajes al principio 
                                solo sonreia y decia tan charro pero luego me preocupe. Recuerdo caminamos hasta un 
                                restaurante, me dijiste que pidieramos plata, no podia de los nervios dije NOO... no soy 
                                capaz pero me miraste fijamente y me dijiste "Si puedes" luego me diste un beso y dije que 
                                si si puedo... asi cualquiera casi muero de la verguenza pero recogi mas que ti por tu 
                                recogiste 1800 pesos y yo me recogi 9500 jajajajaj pero quiero que sepas que lo hice por ti.
                            </p>
                        </div>
                    </div>
                </article>  
            </div>   
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina8.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina10.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div> 

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>
