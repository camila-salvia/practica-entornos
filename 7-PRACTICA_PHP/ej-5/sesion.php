<?php
  session_start();
  $array=["nombre" => "Camila", "edad" => 21, "ciudad" => "Rosario"];
  $_SESSION["datos"]=$array;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Nombre</h1>
  <p>
    <?php 
      //echo "<pre>";
      //var_dump($_SESSION["datos"]);
      //echo "</pre>";
      echo $_SESSION["datos"]["edad"];
    ?>
  </p>
</body>
</html>