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

<body class="paginas pag-11">
    
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
                            <h2 class="title">Te Fuiste</h2>
                            <h3 class="subtitle">Viernes 30 de Agosto</h3>
                        </div>
                        <div class="descripcion">
                            <p>Fue la ultima vez que te vi... tenias una camiseta blanca el bluejeans que te encanta 
                                a mi tambien me gusta, unos converse azules todos lindos, una gorra azul oscura y un cabello 
                                negro que no parecia el tuyo; Fuimos a la "Casa" descubierta hablamos un ratico porque al 
                                poco tiempo llego mi papa, Te queria dejar sin gorra pero te pusiste un poco serio y mejor 
                                te la devolvi. cuando llegamos al semaforo estaba en rojo y casualmente tu estabas por ahi te 
                                comenze a hacer caras y luego arrancamos y hasta ahi te vi. :(
                            </p>
                        </div>
                    </div>
                    <div class="caja">
                        <div class="subtitulo">
                            <h2 class="title">Hemos vivido de todo</h2>
                            <h3 class="subtitle">El Porque...</h3>
                        </div>
                        <div class="descripcion">
                            <p>No quize poner fechas tristes ni fechas en las que peleamos ni fechas en las 
                                cuales terminamos ¿PORQUE? porque solo queria buenos recuerdos y eso que me faltaron 
                                algunos. tambien te preguntaras ¿CUAL ES EL PROPOSITO DE TODO ESTO? ¿PORQUE LO HICE? 
                                la respuesta es muy sencilla: recordarte los momentos tan felices y charros que pasamos 
                                juntos mas de 5 meses en los cuales fui absolutamente feliz aunque hubieran problemas, 
                                peleas, celos, rabias, momentos duros y tristes en los que te necesite y ahi estabas. 
                                Pero con todo eso fui muy feliz porque nada de eso pudo oscurecer la felicidad que siento 
                                cuando estoy junto a ti... quiza esta sea mi despedida y si me conoces sabes que mientras 
                                escribo esto estoy llorando y tratando de ser fuerte pero con mucho dolor en mi alma, 
                                no tengo nada que perdonarte al contrario perdoname tu a mi, por no esforzarme mas por 
                                darte todo el amor y la atencion que querias tu sabes que nunca te voy a odiar en mi 
                                corazon no esta hacerlo una ultima cosa TE ADOROoO y GRACIAS por tantos momentos felices 
                                aunque ahora no se cuando volvere a ser realmente feliz porque aunque sonrio no soy feiz. 
                                DTB mi Bray... Att: Kmi... tu chiquita brava.
                            </p>
                        </div>
                    </div>
                    <div class="caja imagenes">
                        <img src="styles/img/tristezas/cara1.gif" class="cara1">
                        <img src="styles/img/tristezas/cara2.gif" class="cara2">
                        <img src="styles/img/tristezas/cara3.gif" class="cara3">
                    </div>
                </article> 
            </div>     
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina10.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina12.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div> 

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>
