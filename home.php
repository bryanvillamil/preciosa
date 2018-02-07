<!DOCTYPE html>
<script>
    if (localStorage.getItem("user") != undefined)  {

    }else {
        window.location = "./index.php";
    }
</script>
<html>
    <head>
  	     <title>::Bienvenida Kmila::</title>
        <?php include ('inc/head_common.php'); ?>
        <script src="js/home.js"></script>
    </head>
    <body class="home">
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
                        <img src="styles/img/4k/thomas.jpg">
                    </div>

                    <div class="item">
                        <img src="styles/img/4k/paul.jpg">
                    </div>

                    <div class="item">
                        <img src="styles/img/4k/roman.jpg">
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
            <div class="titulo">
                <h2>Foticos</h2>
            </div>
            <div class="container">
                <div class="contenedor">
                    <div class="caja dos">
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/cam.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/salidas/c8.jpeg">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="caja tres">
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/salidas/c2.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/salidas/c3.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/salidas/c1.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="caja dos">
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/salidas/c9.jpeg">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/salidas/c7.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="caja tres">
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/tengoganasdeti/br.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/tengoganasdeti/kyb.gif" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/tengoganasdeti/tu-y-yo.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="caja bottom">
                        <div class="cont grande">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/licioso.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="otros">
                            <div class="cont otros-arriba">
                                <a href="javascript:void(0)" class="arriba" data-toggle="modal" data-target="#myModalHome">
                                    <div class="box-img bg_fix">
                                        <img src="styles/img/nosotros.jpeg" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="cont otros-abajo">
                                <a href="javascript:void(0)" class="abajo" data-toggle="modal" data-target="#myModalHome">
                                    <div class="box-img bg_fix">
                                        <img src="styles/img/nuevas/gris2.jpeg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="caja tres">
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/nuevas/sentados.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/nuevas/familia.jpeg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="cont">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalHome">
                                <div class="box-img bg_fix">
                                    <img src="styles/img/nuevas/modelo.jpeg" alt="">
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

        <!-- Modal -->
        <div id="myModalHome" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Ttop -->
        <a href="#main_header" id="ttop" class="sscroll" style="opacity: 0.5;"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
    </body>
</html>