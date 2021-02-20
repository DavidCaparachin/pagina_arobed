<?php
  $destinatario = 'caparachindavid@gmail.com';
  // Esto es al correo al que se enviara el mensaje
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $header = "Enviado desde la pagina AROBED";
  $mensajeCompleto = $mensaje."\nSAtentamente: ".$nombre;

  mail($destinatario, $correo,$mensajeCompleto,$header);
  echo '<script> alert('correo enviado exitosamente')</script>';
  echo '<script> setTimeout(\"location.href='https:davidcaparachin.github.io/pagina_arobed'\",1000)</script>';

?>