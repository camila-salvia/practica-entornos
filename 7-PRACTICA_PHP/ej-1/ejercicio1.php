<!-- 
  NOTA: hay que configurar las cookies de dos formas:
    - una si el usuario entro a la pagina por la url (mostrar la ultima)
        aca puede haber cookie previa o no.
    - otra si el usuario apreto el boton de actualizar (actualizar)
-->

<?php
if (isset($_POST["color_fondo"])) {  //llega un color a traves de post?
  $color = $_POST["color_fondo"];
  setcookie("estilo", $color, time() + 24 * 3600);
} else { //sino, hay que buscar el ultimo estilo
  if (isset($_COOKIE["estilo"])) {
    $color = $_COOKIE["estilo"];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJERCICIO 1</title>
  <?php
  if (isset($color)) {
    echo '<link rel="stylesheet" type="text/css" href="' . $color . '.css">';
  }
  ?>
</head>

<body>
  <h1>EJERCICIO 1</h1>
  <p>
    Crear una página que puede configurarse con distintos estilos CSS.
    El usuario es quien decide qué aspecto desea que tenga la página, por medio de un formulario. Luego la página es capaz de recordar, entre los distintos accesos que realice el usuario, el aspecto que había elegido para mostrar la web.
  </p>
  <form action="ejercicio1.php" method="POST">
    <p>Seleccione el color de fondo</p>
    <select name="color_fondo" id="">
      <option value="verde">Verde</option>
      <option value="rosa">Rosa</option>
      <option value="negro">Negro</option>
    </select>
    <input type="submit" value="Actualizar">
  </form>
</body>

</html>