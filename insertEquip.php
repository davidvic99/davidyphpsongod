<?php

$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }
if ((!empty($_POST['web']))) {
    $web = $_POST['web'];
}else{
    $_POST['web'] = "Sin web";
    $web = $_POST['web'];
}
        if((!empty($_POST['nombre'])&&(!empty($_POST['ciudad']))&&(!empty($_POST['web'])))){
            $nombre = $_POST['nombre'];
            $ciudad = $_POST['ciudad'];
            $web = $_POST['web'];
            //Es necesario para el funcionamiento que ID de equipo sea autoIncrement
            $insert = $conexion -> query ("INSERT INTO `equipo` (`nombre`, `ciudad`, `web`) VALUES ( '$nombre', '$ciudad', '$web')");
           
        }
        header("Refresh:0; url=act-03.php");
 ?>




