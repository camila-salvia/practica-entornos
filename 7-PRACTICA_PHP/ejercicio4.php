<?php
if(isset($_COOKIE["noticia"])){
  $tipo=$_COOKIE["noticia"];
} else {
  if(isset($_POST["enviar"])){
    $tipo = $_POST["tipo_noti"];
    setcookie("noticia", $tipo, time()+3600*24);
  }
}
header("Location: $tipo.php");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="ejercico4.php" method="POST">
    <label>Politica</label>
    <input type="radio" name="tipo_noti" value="politica">
    <label>Economica</label>
    <input type="radio" name="tipo_noti" value="economica">
    <label>Deportiva</label>
    <input type="radio" name="tipo_noti" value="deportiva">
    <input type="submit" name="enviar">
  </form>
</body>
</html>
