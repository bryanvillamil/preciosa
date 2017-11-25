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
            <div class="arrow-down">
                <div class="animation">
                    <span></span>
                </div>
            </div>
        </div>

        
        <div class="Homegaleria">
            <div class="container">
                <div class="contenedor">
                    <div class="caja dos">
                        <div class="cont">
                            <a href="">
                                <div class="box-img">
                                    <img src="styles/img/cam.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="">
                                <div class="box-img">
                                    <img src="styles/img/risast.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="caja tres">
                        <div class="cont">
                            <a href="">
                                <div class="box-img">
                                    <img src="styles/img/tengoganasdeti/br.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">  
                            <a href="">
                                <div class="box-img">
                                    <img src="styles/img/tengoganasdeti/kyb.gif" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont"> 
                            <a href="">
                                <div class="box-img">
                                    <img src="styles/img/tengoganasdeti/tu-y-yo.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="caja bottom">
                        <div class="cont grande">   
                            <a href="">
                                <div class="box-img">
                                    <img src="styles/img/licioso.jpeg" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="cont otros">
                            <a href="" class="arriba">
                                <div class="box-img">
                                    <img src="styles/img/nosotros.jpeg" alt="">
                                </div>
                            </a>
                            <a href="" class="abajo">
                                <div class="box-img">
                                    <img src="styles/img/compartir.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- botons -->
        <div class="buttons">
            <a href="inicio.php" class="btn-ant btn btn-danger">
                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
            </a>
            <a href="pagina1.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div> 

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>

    </body>
</html>

