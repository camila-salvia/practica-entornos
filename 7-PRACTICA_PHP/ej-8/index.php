<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Contraseña en blanco
define('DB_NAME', 'prueba');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");

    $pal = $_POST['palabra'];

    $consulta = "SELECT * FROM buscador WHERE canciones LIKE '%" . $pal . "%'";
    $resultado = $connection->query($consulta);

    if ($resultado) {
        while ($row = $resultado->fetch_assoc()) {
            $resultados[] = $row['canciones'];
        }
    } else {
        // Manejar errores en la consulta
        echo "Error en la consulta: " . $connection->error;
    }

    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador de canciones</title>
</head>
<body>
    <form action="" method="post">
        <label>Buscar canciones:</label>
        <input type="text" name="palabra" required>
        <input type="submit" value="Buscar">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <h2>Resultados de la búsqueda:</h2>
        <ul>
            <?php
            if (!empty($resultados)) {
                foreach ($resultados as $cancion) {
                    echo "<li>$cancion</li>";
                }
            } else {
                echo "<li>No se encontraron canciones.</li>";
            }
            ?>
        </ul>
    <?php endif; ?>
</body>
</html>