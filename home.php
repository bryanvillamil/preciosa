<!DOCTYPE html>
<html>
    <head>
  	     <title>::Bienvenida Kmila::</title>
        <?php include ('inc/head_common.php'); ?>
    </head>
    <body class="paginas home">
        <!-- recuadro principal de la pagina -->
        <div class="container">  
            <div class="content-top">

                <div class="logo">
                    <img src="" alt="">
                </div>

                <div class="manu">
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
                            <div class="dark">
                                <h1 contenteditable="true">Chicago</h1>
                            </div>
                        </div>

                        <div class="item">
                            <div class="light">
                                <h1 contenteditable="true">Houston</h1>
                            </div>
                        </div>

                        <div class="item">
                            <div class="dark">
                                <h1 contenteditable="true">New York</h1>
                            </div>
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
            </div>
        </div>


        <div class="box-text">
            <div class="descripcion">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste, in delectus error, ad minus consectetur excepturi sint quam aspernatur, magnam quas nemo numquam modi quos? Necessitatibus sapiente sit quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam amet repudiandae perferendis aperiam magni reiciendis recusandae accusamus repellat. Quisquam optio consectetur placeat libero deleniti, animi eius quae laborum necessitatibus repudiandae.</p>
            </div>
        </div>


        <!-- botons -->
        <div class="buttons">
            <a href="pagina1.php" class="btn-sig btn-primary">
                <img src="img/chulo.png" alt=""/>
                Siguiente
            </a>
        </div> 

        <!-- include FOOTER -->
        <?php include 'inc/footer_common.php'; ?>

    </body>
</html>

