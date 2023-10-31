<?php
  session_start();
  if(isset($_POST["enviar"])){
  $_SESSION["nombre"]=$_POST["nombre"];
  $_SESSION["clave"]=$_POST["clave"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Nombre</h3>
</body>
</html>