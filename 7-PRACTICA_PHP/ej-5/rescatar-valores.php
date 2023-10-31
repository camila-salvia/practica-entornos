<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>El nombre es</h2>
  <p><?php echo $_SESSION["nombre"] ?></p>
  <h2>La clave es</h2>
  <p><?php echo $_SESSION["clave"] ?></p>
</body>
</html>