<!DOCTYPE html>
<html>
    <head>
  	     <title>::Bienvenida Kmila::</title>
        <?php include ('inc/head_common.php'); ?>
    </head>
    <body class="paginas home">
        <!-- recuadro principal de la pagina -->
        <!-- 
        <div class="content-top">

            <div class="logo">
                <img src="" alt="">
            </div>

            <div class="menu">
                <nav class="nav-bar">
                    <ul class="menu">
                        <li class="alpha hover-cycle"><a class="menu1" href="#">Bienvenida kmila a</a></li>
                        <li class="hover-cycle"><a class="menu2" href="#">Nuestra Historia</a></li>
                        <li class="hover-cycle"><a class="menu3" href="#">Por fin</a></li>
                        <li class="hover-cycle"><a class="menu4" href="#">ha llegado el dia...</a></li>
                        <li class="hover-cycle"><a class="menu5" href="#">No te imaginas cuanto he esperado para esto</a></li>
                        <li class="hover-cycle"><a class="menu6" href="#">Att: bryan</a></li>     
                    </ul>
                </nav>
            </div>
        </div>
        -->
        <div class="content-bottom">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="styles/img/4k/ciudadH.jpg">
                    </div>

                    <div class="item">
                        <img src="styles/img/4k/ciudadT.jpg">
                    </div>

                    <div class="item">
                        <img src="styles/img/4k/ciudadP.jpg">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> 
            <div class="flechaBottom">
                 <a id="btn-top">top</a>   
            </div>
        </div>

        
        <div class="galeria">
            <a id="content-1"></a>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quas sint unde cupiditate, blanditiis minus. Similique, cumque placeat saepe amet voluptate quasi deleniti pariatur assumenda, aperiam totam quisquam deserunt at!
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="inicio.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div> 

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>

    </body>
</html>

