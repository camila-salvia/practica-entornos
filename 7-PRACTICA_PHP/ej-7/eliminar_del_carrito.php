<?php
session_start();

if (isset($_GET['eliminar']) && !empty($_GET['eliminar'])) {
    $eliminar = $_GET['eliminar'];
    if (($key = array_search($eliminar, $_SESSION['carrito'])) !== false) {
        unset($_SESSION['carrito'][$key]);
    }
}

header("Location: ver_carrito.php");
exit();
?>
