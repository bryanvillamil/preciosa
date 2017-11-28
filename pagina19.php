<!DOCTYPE html>
    <script>
        if (localStorage.getItem("logueado") == "true") {

        }else {
            window.location = "/preciosa/login.php";
        }
    </script>
<html>
<head>
    <meta charset="UTF-8">
    <title>::?????::</title>
    <?php include 'inc/head_common.php'; ?>

</head>

<body class="paginas pag-19">
    

    <div id="wrapper">
        <!-- recuadro principal de la pagina -->
        <div class="contenido"> 
            <div id="video">
                <video width="550" height="350" controls>
                    <source src="mov_bbb.mp4" type="video/mp4">Your browser does not support HTML5 video.
                </video>
            </div>       
        </div>
        
        <!-- botons -->
        <div class="buttons">
            <a href="pagina18.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="final.php" class="btn-sig btn btn-primary">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
            </a>
        </div> 

        <!--pie de pagina con nombre y año-->
        <?php include 'inc/footer_common.php'; ?>
    </div>
</body>
</html>
