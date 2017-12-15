<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>::HoLa KmI::</title>
        <?php include 'inc/head_common.php'; ?>
        <!-- jquery para animaciones Botones -->
        <script src="./js/login.js"></script>
    </head>
    <body class="preciosa login"> 
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
                    <form id="login" class="form-horizontal">
                        <div class="form-group">
                            <label for="nombre" class="control-label label">Nombre:</label>
                            <div class="input">
                                <input class="form-control" id="nombre" name="nombre" size="25" value="" placeholder="Ingresa aqui tu nombre amor" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="control-label label">MI Cedula:</label>
                            <div class="input">
                                <input class="form-control" id="cedula" name="cedula" size="25" type="text" placeholder="Ingresa aqui MI cedula" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo" class="control-label label">Novio:</label>
                            <div class="input">
                                <input class="form-control" id="novio" name="novio" size="25" value="" placeholder="Ingresa el nombre que consideres" required/>
                            </div>
                        </div>
                        <span id="validator"></span>
                        <div class="form-group">
                            <div class="enviar">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
    </body>
</html>