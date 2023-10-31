<?php
//setcookie("contador", "", time()-3600*24);
if (isset($_COOKIE["contador"])) {
  setcookie("contador", $_COOKIE["contador"] + 1, time() + 3600 * 24);
  echo "Número de visitas:" . $_COOKIE["contador"];
} else {
  setcookie("contador", 1, time() + 3600 * 24);
  echo "Bienvenido";
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTADOR</title>
</head>

<body>

</body>

</html>