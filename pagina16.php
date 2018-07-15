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
    <script src="js/rompecabezas.js"></script>
</head>
<body class="paginas pag-16">

    <!-- include MenuMobil-->
    <?php include 'inc/menuMobile.php'; ?>

    <div id="wrapper">
        <!-- include HEADER -->
        <?php include 'inc/header.php'; ?>

        <!-- recuadro principal de la pagina -->
        <div class="ppal">
            <div class="titulo">
                <h1>Armemos Nuestro Amor <i class="fa fa-puzzle-piece" aria-hidden="true"></i></h1>
            </div>
            <div class="contenedor">
                <main>
                    <div id="canvas"></div>
                    <div id="previews"></div>
                </main>
            </div>
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina15.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina17.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>

        <!-- include FOOTER 
        <?php include 'inc/footer_common.php'; ?>
        -->

         <!-- Scroll Ttop -->
        <a href="#main_header" id="ttop" class="sscroll" style="opacity: 0.5;"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
    </div>
</body>
</html>
