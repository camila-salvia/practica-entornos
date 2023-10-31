<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Contraseña en blanco
define('DB_NAME', 'compras');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");
$consulta = "SELECT * FROM catalogo";
$resultado = $connection->query($consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de productos</title>
</head>
<body>
      <h1>Catálogo de productos</h1>
    <ul>
        <?php
        // Mostrar los productos disponibles
        while ($row = $resultado->fetch_assoc()) {
            echo "<li>" . $row['producto'] . " - Precio: $" . $row['precio'] . " <a href='agregar_carrito.php?id=" . $row['id'] . "'>Agregar al carrito</a></li>";
        }
        ?>
    </ul>
    <a href="ver_carrito.php">Ver Carrito</a>
</body>
</html>
