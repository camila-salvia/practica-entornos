<?php
  if(isset($_POST["enviar"])){
    $tipo = $_POST["tipo_noti"];
    setcookie("noticia", $tipo, time()+3600*24);
    include($tipo . ".php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>
<body>
  <form action="ejercicio4.php" method="POST">
    <input type="radio" name="tipo_noti" value="politica">
    <input type="radio" name="tipo_noti" value="economica">
    <input type="radio" name="tipo_noti" value="deportiva">
    <input type="submit" name="enviar">
  </form>
</body>
</html>