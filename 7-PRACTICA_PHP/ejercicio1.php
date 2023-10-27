<?php
if (isset($_POST["estilo"])) {
  $estilo = $_POST["estilo"];
  setcookie("estilo_pag", $estilo, time() + 3600);
} else {
  if (isset($_COOKIE["estilo_pag"])) {
    $estilo = $_COOKIE["estilo_pag"];
  }
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
  <form action="cookies.php" method="POST">
    <p>Seleccione el color de fondo</p>
    <select name="estilo" id="">
      <option value="verde">Verde</option>
      <option value="rosa">Rosa</option>
      <option value="negro">Negro</option>
    </select>
    <input type="submit" value="Actualizar">
  </form>
</body>

</html>