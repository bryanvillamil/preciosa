<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
     <?php

		$conexion = "localhost"; //el servidor local=localhost
		$usuario = "root"; //El usuario dela bd
		$clave = ""; //La contraseña del usuario
		$db = "teamo"; //El nombre de db
		 
		$conexion=mysql_connect('localhost','root','') or die ("no hay conexion a la base de datos");
		$db=mysql_select_db('teamo',$conexion) or die ("no existe la base de datos");

			if (!$conexion) {
				    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
			}
			mysql_select_db($db, $conexion);

			mysql_close($conexion);
			

		?>

</body>
</html>
 




