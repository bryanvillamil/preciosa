<?php
  session_start();
  $_SESSION['nombre']=$_REQUEST['nombre'];
  $_SESSION['cedula']=$_REQUEST['cedula'];
  $_SESSION['novio']=$_REQUEST['novio'];
?>

<!doctype html>
<html>
  <head>
    <title>!..bERROR MY CIELO...!</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>

<?php
    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);

        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }


    $user=$_SESSION["nombre"];   
    $ced=$_SESSION["cedula"];
    $nov=$_SESSION["novio"];

    debug_to_console( "entra aqui" );

    $conexion=mysql_connect('localhost','root','') or die ("no hay conexion a la base de datos");
    debug_to_console( "conec" );
        $db=mysql_select_db('teamo',$conexion) or die ("no existe la base de datos");
    $result="SELECT * FROM usuarios WHERE nombre= '$user'";
    $recup=mysql_query($result) or die("Error en: $recup: " . mysql_error());

    if($row=mysql_fetch_array($recup))
    { 
        if($row["cedula"]==$ced && $row["novio"]==$nov)
        {
            session_start();
            $_SESSION['nombre']=$user;
            header("Location: home.php"); 
        }
        else
        {
?>
            <script languaje="javascript">
                alert(" Hola Kmi Los Datos Incorrectos por favor verifica");
                location.href = "login.html";
            </script>
    <?php         
        }
    }
    else
    {
    ?>
       <script languaje="javascript">
        alert("AMOR el Usuario ingresado no existe!... escribiste mal :(");
        location.href = "login.html";
       </script>
    <?php   
    }
        mysql_free_result($result);
        mysql_close();
    ?>
</html>
