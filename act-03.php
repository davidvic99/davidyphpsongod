<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}


 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
     
      <h2>Jugadores</h2>
      <table>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Ciudad</th>
          <th>web</th>
        </tr>
        <?php
          $resultado = $conexion->query("SELECT * FROM equipo");
          foreach ($resultado as $equipo) {
            echo "<tr>";
            echo "<td>".$equipo['id_equipo']."</td>";
            echo "<td>".$equipo['nombre']."</td>";
            echo "<td>".$equipo['ciudad']."</td>";
            echo "<td>".$equipo['web']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>
          <h2>Registrar Equipo.</h2>
          <form method="POST" action ="insertEquip.php">
            Nombre<br>
            <input type ="text" name="nombre" placeholder="nombre" required>
            Ciudad<br>
            <input type="text" name="ciudad" placeholder ="ciudad" required>
            WEB<br>
            <input type="text" name="web" placeholder = "Web">
            <input type="submit" value="Registar">
                     
          
          </form>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



  </body>
</html>