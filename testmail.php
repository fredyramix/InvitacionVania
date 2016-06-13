<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'freddyramixtest@gmail.com';                 // SMTP username
$mail->Password = 'Esperanza93';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$destinatario = $_POST['email'];
$mail->setFrom('freddyramix@gmail.com', 'Freddy');
$mail->addAddress($destinatario); 
$mail->addAddress('freddyramix@gmail.com');  
$mail->addAddress('ramses283@hotmail.com');  
    // Add a recipient
             // Name is optional

$mail->Subject = 'Confirmacion de Asistencia a Fiesta de Vania';
$mail->Body    = 'Hola:' .$_POST['name']. '   has confirmado la recepcion para la Fiesta
de Vania. Confirmaste acudir a los eventos : '.$_POST['events'].'. Vienen :'.$_POST['guests'].'Contigo. Nombres de los invitados: '.$_POST['guestinfo'].' Informacion Adicional: '.$_POST['message'];
$mail->send();

if(!$mail->send()) 
{
    echo 'Ocurrio algun error al enviar correo, llamar al anfitrion';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado correctamente';
}