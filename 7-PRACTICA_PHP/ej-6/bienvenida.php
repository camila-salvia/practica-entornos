<?php
session_start();

if (isset($_SESSION['nombre_alumno'])) {
    echo "¡Bienvenido, " . $_SESSION['nombre_alumno'] . "!";
} else {
    echo "No puedes visitar esta página.";
}
?>
