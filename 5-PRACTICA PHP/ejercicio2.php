<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <h1>Pagina de Contacto</h1>
      <form action="" method="post">
        <fieldset>
          <p><label> Nombre <input type="text" name="nombre" size="25" /> </label></p>
          <p><label> Email <input type="text" name="email" size="25" /> </label></p> 
          <p><label><textarea name="texto" cols="32" rows="6"></textarea></label></p>
          <input type="submit" value="Enviar"/>
        </fieldset>
      </form>
      <?php 
          $fecha=date("d-m-Y");
          $hora= date("H :i:s");
          $destino="valenicola02@gmail.com"; /*"micorreo@dominio.com";*/
          $asunto="Comentario";
          $desde='From:' .$_POST['email'];
          $comentario= "
          \n
          Nombre: $_POST[nombre]\n
          Email: $_POST[email]\n
          Consulta: $_POST[texto]\n
          Enviado: $fecha a las $hora\n
          \n
          ";
           if (mail($destino,$asunto,$comentario,$desde)){
            echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";  
           } else {
            echo 'Hubo un problema al enviar el correo.';
           };
      ?>
</body>
</html>