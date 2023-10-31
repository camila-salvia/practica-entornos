<?php
session_start();

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Añadir el producto al carrito (guardando los IDs de los productos)
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    array_push($_SESSION['carrito'], $product_id);
}

header("Location: catalogo.php");
?>