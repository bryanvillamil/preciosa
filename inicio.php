
<!DOCTYPE html>
<script>
    if (localStorage.getItem("logueado") == "true") {

    }else {
        window.location = "./index.php";
    }
</script>
<html>
    <head>
  	     <title>::Bienvenida Kmila::</title>
        <?php include ('inc/head_common.php'); ?>
        <!-- jquery para animaciones Botones -->
        <script src="js/inicio.js"></script>
    </head>
    <body class="inicio">
    	<header>
    		<nav class="text-center">
    			<ul class="inline-block">
    				<li class="pull-left active"><a href="#" data-direction="front">1</a></li>
    				<li class="pull-left"><a href="#" data-direction="back">2</a></li>
    				<li class="pull-left"><a href="#" data-direction="top">3</a></li>
    				<li class="pull-left"><a href="#" data-direction="right">4</a></li>
    				<div class="clearfix"></div>
    			</ul>
    		</nav>
    	</header>
    	<div id="wrap">
    		<div class="cube">
    			<section class="page active face front" id="saludo">
    				<div class="act-table text-center">
    					<div class="act-table-cell ver-middle">Bienvenida</div>
    				</div>
    			</section>
    			<section class="page face back" id="saludo">
    				<div class="act-table text-center">
    					<div class="act-table-cell ver-middle">Corazon <i class="fa fa-heart" aria-hidden="true"></i></div>
    				</div>
    			</section>
    			<section class="page face top" id="saludo">
    				<div class="act-table text-center">
    					<div class="act-table-cell ver-middle">a tu Pagina web...</div>
    				</div>
    			</section>
    			<section class="page face right" id="saludo">
    				<div class="act-table text-center">
    					<div class="act-table-cell ver-middle">Espero te Guste.</div>
    				</div>
    			</section>
    		</div>
    	</div>

		<!-- botons -->
        <div class="buttons">
        	<a href="index.php" class="btn-ant btn btn-danger">
	            <i class="fa fa-hand-o-left" aria-hidden="true"></i>
	        </a>
            <a href="home.php" class="btn-sig btn btn-primary">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div> 

    </body>
</html>