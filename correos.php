<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMphpmailer.php';
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTeléfono: ".$telefono."\nMensaje: ".$mensaje;

$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'caparachindavid@gmail.com';                     //SMTP username
    $mail->Password   = 'david123456789';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('caparachindavid@gmail.com', 'DavidJ');
    $mail->addAddress('caparachindavid@gmail.com');     //aquien se le enviara el mensaje
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto muy importante';
    $mail->Body    = "$contenido ";
   
    $mail->send();
    header("Location:https://trusting-kepler-4001e1.netlify.app/");
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}




//   $destinatario = "caparachindavid@gmail.com";
//  // Esto es al correo al que se enviara el mensaje
//   $nombre = $_POST['nombre'];
//   $telefono = $_POST['telefono'];
//   $correo = $_POST['correo'];
//   $mensaje = $_POST['mensaje'];

//   $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTeléfono: ".$telefono."\nMensaje: ".$mensaje;
//   @mail($destinatario, "Contacto",$contenido);
//   header("Location:gracias.html");
//---------------------------------------------------------
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