<!-- bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string
$additional_parameters ]] )
Ejemplo -->

<?php
$destinatario = "valenicola02@gmail.com ";
$asunto = "Prueba";
$cuerpo = "<html>
            <body>
              <p>Esto es una prueba de envío de correo a través del servidor
            </body>
          </html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type: text/html; charset=utf-8859- 1" . "\r\n";
$headers = "From: Mi Nombre <mi_correo@ejemplo.com>" . "\r\n";
if(mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo electrónico enviado correctamente.";
} else {
    echo "Error al enviar el correo electrónico.";
}
?> 