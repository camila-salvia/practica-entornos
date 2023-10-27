<?php
if (isset($_POST["enviar"])) {
  $nombre = $_POST["nombre"];
  if (isset($_COOKIE["nombre_usuario"])) {
    echo "El ultimo nombre ingresado fue: " . $_COOKIE["nombre_usuario"];
  } else {
    echo "Es la primera vez que ingresa ese nombre";
    setcookie("nombre_usuario", $nombre, time() + 3600 * 24);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJERCICIO 3</title>
</head>

<body>
  <form action="ejercicio3.php" method="POST">
    <label>Ingrese su nombre</label>
    <input type="text" name="nombre">
    <input type="submit" name="enviar">
  </form>
</body>

</html>


</body>

</html>