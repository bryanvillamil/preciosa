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

<body class="paginas pag-18">
    <div id="wrapper">
        <!-- recuadro principal de la pagina -->
        <div id="contenedor">
            <div class="portada">
                 <img src="img/tengoganasdeti/h.gif" class="img-portada">

                 <div id="contenido">
                    <img src="img/tengoganasdeti/tgt.gif" class="uno">
                    <img src="img/tengoganasdeti/kyb.gif" class="dos">
                    <img src="img/tengoganasdeti/odio.gif" class="tres"><br>
                    <img src="img/tengoganasdeti/byk.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/te amo.jpg" class="cinco">
                    <img src="img/tengoganasdeti/kmi.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/tengo.jpg" class="cinco">
                    <img src="img/tengoganasdeti/gin.gif" class="ocho"><br>
                    <img src="img/tengoganasdeti/cuando estoy contigo.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/kmi y bray.jpg" class="cinco">
                    <img src="img/tengoganasdeti/carta de h.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/original.jpg" class="cinco">
                    <img src="img/tengoganasdeti/feita.jpg" class="seis"><br>
                    <img src="img/tengoganasdeti/br.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/quiero escaparme contigo.jpg" class="cinco">
                    <img src="img/tengoganasdeti/tu y yo.jpg" class="cuatro">
                    <img src="img/tengoganasdeti/t.jpg" class="cinco">
                 </div>
            </div>
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="pagina17.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina19.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>

