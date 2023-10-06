<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador de visitas</title>
</head>
<body>
  <?php
    session_start();
    if (!isset($_SESSION["contador"])){
      $_SESSION["contador"] = 1;
    }else{
      $_SESSION["contador"]++;
    } 
    echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
  ?>
</body>
</html>