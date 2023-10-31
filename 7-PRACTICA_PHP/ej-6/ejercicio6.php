<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Contraseña en blanco
define('DB_NAME', 'base2');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");

    $email = $_POST['email'];

    $consulta = "SELECT nombre FROM alumnos WHERE mail = '$email'";
    $resultados = mysqli_query($connection, $consulta);

    if ($resultados->num_rows > 0) {
        $row = $resultados->fetch_assoc();
        $_SESSION['nombre_alumno'] = $row['nombre'];
        header("Location: bienvenida.php");
    } else {
        echo "El correo ingresado no corresponde a ningún alumno.";
    }

    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 6</title>
</head>
<body>
    <form action="" method="post">
        <label>Ingrese el correo del alumno:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
