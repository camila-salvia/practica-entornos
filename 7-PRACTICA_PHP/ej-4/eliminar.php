<?php
if(isset($_POST["eliminar"])){
  setcookie("noticia", "", time()-3600*24); 
  header("Location: ejercicio4.php"); 
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
  <form action="eliminar.php" method="POST">
    <input type="submit" name="eliminar" value="ELIMINAR COOKIE">
  </form>
</body>
</html>