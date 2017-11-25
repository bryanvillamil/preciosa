<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>::HoLa KmI::</title>
        <?php include 'inc/head_common.php'; ?>
    </head>
    <body class="preciosa login"> 
        <header>
            <!-- cabecera de pagina LOGO-->
            <div class="container">
                <div class="row ">
                    <div class="">
                        <img src="img/teamo.png" class="logo img-responsive">
                    </div>       
                </div>
            </div>
        </header>

	       <!-- recuadro principal de la pagina  FORMULARIO -->
        <div class="container">
            <div class="bg-img">
                <img src="styles/img/4k/ciudad.jpg" alt="">
            </div>
            <div class ="cuadro">
                <div class="titulo">
                    <h3 class="">HOLA AMOR</h3>
                </div>
                <div class="formu form-group">   
                    <form action="inicio.php" class="form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="nombre" class="control-label label">Nombre:</label>
                            <div class="input">
                                <input class="form-control" name="nombre" size="25" value="" placeholder="Ingresa aqui tu nombre amor" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="control-label label">MI Cedula:</label>
                            <div class="input">
                                <input class="form-control" name="cedula" size="25" type="text" placeholder="Ingresa aqui MI cedula" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo" class="control-label label">Novio:</label>
                            <div class="input">
                                <input class="form-control" name="novio" size="25" value="" placeholder="Ingresa el nombre que consideres" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="enviar">
                                <button class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
    </body>
</html>
