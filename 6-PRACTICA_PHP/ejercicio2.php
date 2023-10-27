<?php
// Confeccionar una página html que presente un menú para realizar un ABML de una tabla de Ciudades, en
// una base de datos MySQL denominada Capitales.
// Por ejemplo la Tabla debería tener el siguiente formato:

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Contraseña en blanco si no has configurado una
define('DB_NAME', 'capitales');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");


// Conexión a la base de datos (define tus constantes DB_HOST, DB_USER, DB_PASS y DB_NAME)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacion = $_POST["operacion"];
    $ciudad = $_POST["ciudad"];


    switch ($operacion) {
        case "alta":
            $pais = $_POST["pais"];
            $habitantes = $_POST["habitantes"];
            $superficie = $_POST["superficie"];
            $tieneMetro = $_POST["tieneMetro"];
            // Código para agregar una ciudad
            $consulta = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
                         VALUES ('$ciudad', '$pais', $habitantes, $superficie, '$tieneMetro')";
            if (mysqli_query($connection, $consulta)) {
                echo "Ciudad agregada con éxito.";
            } else {
                echo "Error al agregar la ciudad: " . mysqli_error($connection);
            }
            break;

        case "edicion":
            // Código para editar una ciudad
            $pais = $_POST["pais"];
            $habitantes = $_POST["habitantes"];
            $superficie = $_POST["superficie"];
            $tieneMetro = $_POST["tieneMetro"];
            $nuevo_ciudad = $_POST["nuevo_ciudad"];
            $nuevo_pais = $_POST["nuevo_pais"];
            $nuevo_habitantes = $_POST["nuevo_habitantes"];
            $nuevo_superficie = $_POST["nuevo_superficie"];
            $nuevo_tieneMetro = $_POST["nuevo_tieneMetro"];

            $consulta = "UPDATE ciudades 
                         SET 
                             ciudad = '$nuevo_ciudad', 
                             pais = '$nuevo_pais', 
                             habitantes = $nuevo_habitantes, 
                             superficie = $nuevo_superficie, 
                             tieneMetro = '$nuevo_tieneMetro' 
                         WHERE ciudad = '$ciudad'";
            if (mysqli_query($connection, $consulta)) {
                echo "Ciudad editada con éxito.";
            } else {
                echo "Error al editar la ciudad: " . mysqli_error($connection);
            }
            break;

        case "baja":
            // Código para eliminar una ciudad
            $consulta = "DELETE FROM ciudades WHERE ciudad = '$ciudad'";
            if (mysqli_query($connection, $consulta)) {
                echo "Ciudad eliminada con éxito.";
            } else {
                echo "Error al eliminar la ciudad: " . mysqli_error($connection);
            }
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
    <h2>Agregar Ciudad</h2>
    <form method="POST" action="">
        <input type="hidden" name="operacion" value="alta">
        <label for="ciudad">Nombre de la Ciudad:</label>
        <input type="text" name="ciudad" required>
        <label for="pais">País donde se encuentra la Ciudad:</label>
        <input type="text" name="pais" required>
        <label for="habitantes">Cantidad de habitantes de la Ciudad:</label>
        <input type="text" name="habitantes" required>
        <label for="superficie">Superficie de la Ciudad:</label>
        <input type="text" name="superficie" required>
        <label for="tieneMetro">Indique si la Ciudad tiene Metro:</label>
        <input type="text" name="tieneMetro" required>
        <input type="submit" value="Agregar Ciudad">
    </form>
<hr>
  <h2>Modificacion de ciudad</h2>  
<form method="POST" action="">
  <input type="hidden" name="operacion" value="edicion">
  <label for="ciudad">Nombre de la Ciudad a Editar:</label>
  <input type="text" name="ciudad" required>
  <label for="nuevo_ciudad">Nuevo Nombre de la Ciudad:</label>
  <input type="text" name="nuevo_ciudad" required>
  <label for="pais">Nombre del Pais de la Ciudad a Editar:</label>
  <input type="text" name="pais" required>
  <label for="nuevo_pais">Nuevo Nombre del Pais:</label>
  <input type="text" name="nuevo_pais" required>
  <label for="habitantes">Cantidad de habitantes de la Ciudad a Editar:</label>
  <input type="text" name="habitantes" required>
  <label for="nuevo_habitantes">Nueva cantidad de habitantes de la Ciudad:</label>
  <input type="text" name="nuevo_habitantes" required>
  <label for="superficie">Superficie de la Ciudad a Editar:</label>
  <input type="text" name="superficie" required>
  <label for="nuevo_superficie">Nueva superficie de la Ciudad:</label>
  <input type="text" name="nuevo_superficie" required>
  <label for="tieneMetro">Si tiene metro la Ciudad a Editar:</label>
  <input type="text" name="tieneMetro" required>
  <label for="nuevo_tieneMetro">Si tiene metro la Ciudad:</label>
  <input type="text" name="nuevo_tieneMetro" required>
  <input type="submit" value="Editar Ciudad">
</form>
  <h2>Eliminar ciudad</h2>  
<form method="POST" action="">
  <input type="hidden" name="operacion" value="baja">
  <label for="ciudad">Nombre de la Ciudad a Eliminar:</label>
  <input type="text" name="ciudad" required>
  <input type="submit" value="Eliminar Ciudad">
</form>
<hr>
 
<!-- Ignorar las lineas siguientes en caso de no desear la paginacion -->

<?php
// Número de registros por página
$registrosPorPagina = 2;

// Página actual (por defecto, la primera página)
$paginaActual = isset($_GET['page']) ? $_GET['page'] : 1;

// Calcular el índice inicial para la consulta
$indiceInicial = ($paginaActual - 1) * $registrosPorPagina;

// Consulta para obtener un conjunto de registros de acuerdo a la página actual
$consulta = "SELECT * FROM ciudades LIMIT $indiceInicial, $registrosPorPagina";
$resultados = mysqli_query($connection, $consulta);

while ($fila = mysqli_fetch_array($resultados))
{
    // Mostrar los datos de cada fila
    ?>
    <tr>
     <td><?php echo ($fila[0]); ?></td>
     <td><?php echo ($fila[1]); ?></td>
     <td><?php echo ($fila[2]); ?></td>
     <td><?php echo ($fila[3]); ?></td>
     <td><?php echo ($fila[4]); ?></td>
     <td><?php echo ($fila[5]); ?></td>
     <br>
    </tr>
    <?php
}

// Liberar el conjunto de resultados
mysqli_free_result($resultados);

// Calcular el número total de registros
$consultaTotal = "SELECT COUNT(*) as total FROM ciudades";
$resultadoTotal = mysqli_query($connection, $consultaTotal);
$datosTotal = mysqli_fetch_assoc($resultadoTotal);
$totalRegistros = $datosTotal['total'];

// Calcular el número total de páginas
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

// Mostrar la paginación
echo '<div class="pagination">';
for ($i = 1; $i <= $totalPaginas; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a>';
}
echo '</div>';
?>




</body>
</html>


<head>
    <style>
        .pagination {
            display: flex;
            list-style: none;
            justify-content: center; /* Centrar horizontalmente los elementos */
        }

        .pagination td {
            margin: 5px;
            border: 10px;
            padding: 5px 10px;
        }
       

        .pagination a {
            text-decoration: none;
            background-color: #f2f2f2;
            padding: 5px 10px;
            color: #333;
        }

        .pagination a:hover {
            background-color: #666;
            color: white;
        }
    </style>
</head>
<body>

</body>
</html>