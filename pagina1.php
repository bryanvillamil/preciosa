<!DOCTYPE html>
<script>
    if (localStorage.getItem("logueado") == "true") {

    }else {
        window.location = "/preciosa/login.php";
    }
</script>
<html>
<head>
    <title>:: Te AdOrO::</title>
    <!--include los links-->
    <?php include 'inc/head_common.php'; ?>
</head>
<body class="paginas pag-1">

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
                        <h1>Nuestro inicio</h1>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Domingo 10 de Febrero</h2>
                        </div>
                        <div class="descripcion">
                            <p>Apenas te empece hablar, fue algo muy charro; Recuerdo que empezamos 
                                con una "entrevista" bastante boba, Me caiste super bien, bajamos juntos 
                                hasta la carretera hablando de tu trabajo como "vendedor" Decias que vendias
                                los bananos mas ricos, que por eso todo el dia comias bananos pero que para
                                variar hacias sancocho de banano,sopa de banano, arroz de banano, jugo de 
                            banano... Me hiciste reir mucho.</p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Martes 12 de Febrero</h2>
                        </div>
                        <div class="descripcion">
                            <p>Despues del culto camine contigo hasta la carretera en el camino me contaste 
                                muchas cosas sobre tu vida y tambien te conte varias, Me contaste como te 
                                apuñalearon me mostraste las cicatrices... Si lo se apenas me las mostraste puse 
                                cara de terror y de susto jejeje;  Me regalaste unas galletas bridge de chocolate, 
                            Tambien me preguntaste varias cosas de edian.</p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Sabado 23 de Febrero</h2>
                        </div>
                        <div class="descripcion">    
                            <p>Recuerdo que este dia nos acompañaste hasta mi casa, Me prestaste tu biblia 
                                que despues se convirtio en nuestra... Recuerdo que tenias el camibuso cafe y 
                            como empezo a llovisnar se lo prestaste a Izza. :(</p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2>Domingo 24 de Febrero</h2>
                        </div>
                        <div class="descripcion">    
                            <p>Subimos donde Tatiana Hincapie(la brutica)...ese dia paramos en el parque a comer, 
                                Recuerdo que dijiste : "Edian con el permiso suyo pero Camila esta muy linda". Despues 
                                cuando salimos de la panadeia se me iva a quedar tu biblia; Pero izza me hizo caer en 
                                cuenta,... Cuando ibamos de bajada para la casa fue cuando me comenzaste a decir que  
                                ibas a orar para que el señor me despertara el amor por ti, que la oracion del justo 
                            puede... Te Quieroo.</p>
                        </div>
                    </div>
                </article> 
            </div>         
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="home.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina2.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>   

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>
