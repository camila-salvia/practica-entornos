<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Contraseña en blanco
define('DB_NAME', 'compras');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");

if (!empty($_SESSION['carrito'])) {
    $ids = implode(',', $_SESSION['carrito']);
    $consulta = "SELECT * FROM catalogo WHERE id IN ($ids)";
    $resultado = $connection->query($consulta);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>
<body>
    <h1>Carrito de compras</h1>
    <ul>
        <?php
        if (!empty($_SESSION['carrito'])) {
            while ($row = $resultado->fetch_assoc()) {
                echo "<li>" . $row['producto'] . " - Precio: $" . $row['precio'] . " <a href='eliminar_del_carrito.php?eliminar=" . $row['id'] . "'>Eliminar</a></li>";
            }
        } else {
            echo "<li>El carrito está vacío</li>";
        }
        ?>
    </ul>
    <a href="catalogo.php">Agregar más productos al carro</a>
</body>
</html>
