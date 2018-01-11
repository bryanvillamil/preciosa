<!DOCTYPE html>
<script>
    if (localStorage.getItem("user") != undefined)  {

    }else {
        window.location = "./index.php";
    }
</script>
<html>
<head>
    <title>:: Te AmOoOoOo::</title>
    <link rel="stylesheet" href="css/normalize.min.css">

    <?php include 'inc/head_common.php'; ?>

    <!--................librerias de jquery............-->
    <script src="jquery/jquery-1.6.3.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>
    <header>
        <!-- cabecera de pagina-->
        <div class="img-logo">
            <img src="img/mmm.jpg">
        </div>
    </header>
    <!-- recuadro principal de la pagina -->
    <div class="contenedor">
        <div id="video">
            <video width="920" height="550" autoplay>
                <source src="video/creo_en_ti.mp" type="video/mp4">creo en ti
                </video>
            </div>

            <div id="titulo">
                <h1 class="aceptas">Si Aceptas... PrOmEtO</h1>
            </div>

            <div id="promesas">
                <p>Estar para ti siempre</p>
            </div>
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="login.php" class="btn-tristeza btn btn-danger">
                <i class="fa fa-times" aria-hidden="true"></i>
                No
            </a>
            <a href="final2.php" class="btn-felicidad btn btn-success">
                <i class="fa fa-heart" aria-hidden="true"></i>
                Si
            </a>
        </div>

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>

    </body>
    </html>
