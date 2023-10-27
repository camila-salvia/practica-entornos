<?php
// Confeccionar una página html que presente un menú para realizar un ABML de una tabla de Ciudades, en
// una base de datos MySQL denominada Capitales.
// Por ejemplo la Tabla debería tener el siguiente formato:

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Contraseña en blanco si no has configurado una
define('DB_NAME', 'Capitales');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");

$consulta = "SELECT * FROM Ciudades LIMIT 10";

$resultados = mysqli_query($connection, $consulta);

switch ($variable) {
  case 'value':
    # code...
    break;
  
  default:
    # code...
    break;
}

while ($fila = mysqli_fetch_array($resultados))
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2]); ?></td>
 <td><?php echo ($fila[3]); ?></td>
 <td><?php echo ($fila[4]); ?></td>
 <td><?php echo ($fila[5]); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($resultados);
mysqli_close($link);
?>


<?php
// Conexión a la base de datos (define tus constantes DB_HOST, DB_USER, DB_PASS y DB_NAME)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "alta":
            // Código para agregar una ciudad
            $nombre = $_POST["nombre"];
            // Realiza la inserción en la base de datos
            // ...
            break;

        case "edicion":
            // Código para editar una ciudad
            $nombre = $_POST["nombre"];
            $nuevo_nombre = $_POST["nuevo_nombre"];
            // Realiza la edición en la base de datos
            // ...
            break;

        case "baja":
            // Código para eliminar una ciudad
            $nombre = $_POST["nombre"];
            // Realiza la eliminación en la base de datos
            // ...
            break;

        default:
            echo "Operación no válida.";
            break;
    }
}
?>





























<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Agregar ciudad</h2>  
<form method="POST" action="agregar_ciudad.php">
  <label for="nombre">Nombre de la Ciudad:</label>
  <input type="text" name="nombre" required>
  <input type="submit" value="Agregar Ciudad">
</form>
<hr>
  <h2>Modificacion de ciudad</h2>  
<form method="POST" action="editar_ciudad.php">
  <label for="nombre">Nombre de la Ciudad a Editar:</label>
  <input type="text" name="nombre" required>
  <label for="nuevo_nombre">Nuevo Nombre de la Ciudad:</label>
  <input type="text" name="nuevo_nombre" required>
  <input type="submit" value="Editar Ciudad">
</form>
  <h2>Eliminar ciudad</h2>  
<form method="POST" action="eliminar_ciudad.php">
  <label for="nombre">Nombre de la Ciudad a Eliminar:</label>
  <input type="text" name="nombre" required>
  <input type="submit" value="Eliminar Ciudad">
</form>

<?php
// Consulta para obtener todas las ciudades
$consulta = "SELECT * FROM Ciudades";
$resultados = mysqli_query($connection, $consulta);

if ($resultados) {
    echo "<h2>Listado de Ciudades</h2>";
    echo "<ul>";
    while ($fila = mysqli_fetch_assoc($resultados)) {
        echo "<li>" . $fila['nombre'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Error al realizar la consulta...";
}
?>




</body>
</html>