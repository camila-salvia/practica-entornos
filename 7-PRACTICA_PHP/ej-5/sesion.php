<?php
  session_start();
  if(isset($_POST["enviar"])){
  $_SESSION["nombre"]=$_POST["nombre"];
  $_SESSION["clave"]=$_POST["clave"];
  }
  header("Location: index.php");
  exit();
?>

