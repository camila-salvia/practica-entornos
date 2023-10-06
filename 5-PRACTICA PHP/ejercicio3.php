<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recomendacion</title>
</head>
<body>
  <h1>Sitio Web</h1>
    <form action="" method="post">
        <label for="nombre">Tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Tu correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="nombre_amigo">Nombre de tu amigo:</label>
        <input type="text" id="nombre_amigo" name="nombre_amigo" required><br><br>

        <label for="email_amigo">Correo electrónico de tu amigo:</label>
        <input type="email" id="email_amigo" name="email_amigo" required><br><br>

        <input type="submit" value="Enviar Recomendación">
    </form>  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $nombre_amigo = $_POST["nombre_amigo"];
    $email_amigo = $_POST["email_amigo"];

    // Configura los encabezados del correo
    $to = $email_amigo;
    $subject = 'Recomendación de ' . $nombre;
    $message = "Hola $nombre_amigo,\n\n";
    $message .= "Te recomiendo visitar este sitio web: [Enlace al sitio]\n\n";
    $message .= "Saludos,\n$nombre";

    // Envía el correo
    if (mail($to, $subject, $message, "From: $email")) {
        echo 'Recomendación enviada exitosamente a tu amigo.';
    } else {
        echo 'Hubo un problema al enviar la recomendación. Por favor, inténtalo nuevamente más tarde.';
    }
  }
  ?>
</body>
</html>