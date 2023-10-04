Función mail()
bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string
$additional_parameters ]] )
Ejemplo
<?php
$destinatario = "xx@xx.com ";
$asunto = "Prueba";
$cuerpo = "Esto es una prueba de envío de correo a través del servidor";
mail($destinatario,$asunto,$cuerpo)
?> 