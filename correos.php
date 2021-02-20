<?php
  $destinatario = "dcr57312@gmail.com";
  // Esto es al correo al que se enviara el mensaje
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTeléfono: ".$telefono."\nMensaje: ".$mensaje;
  mail($destinatario, "Contacto",$contenido);
  header("Location:gracias.html");

  // $header = "Enviado desde la pagina AROBED";
  // $mensajeCompleto = $mensaje."\nSAtentamente: ".$nombre;

  // @mail($destinatario, $correo,$mensajeCompleto,$header);
  // echo "<script> alert('correo enviado exitosamente')</script>";
  // echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

  // if(isset($_POST['enviar'])){
  //   if(!empty($_POST['name']) && !empty($_POST['name']) && !empty($_POST['name']) && !empty($_POST['name'])){
  //     $nombre = $_POST['nombre'];
  //     $telefono = $_POST['telefono'];
  //     $correo = $_POST['correo'];
  //     $mensaje = $_POST['mensaje'];
  //     $hearder = "From: caparachindavid@gmail.com"."\r\n";
  //     $hearder .= "Reply-To: caparachindavid@gmail.com"."\r\n";
  //     $hearder .= "X-Mailer: PHP/".phpversion();
  //     $mail = @mail($nombre,$telefono,$correo,$mensaje);
  //     if($mail){
  //       echo "<h4>¡Mail enviado exitosamente!</h4>";
  //     }
  //   } 

  // }

?>