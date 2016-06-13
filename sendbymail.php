<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "freddyramix@gmail.com";
$email_subject = "Cadena de TEXTO";
$email_from="freddyramix@gmail.com";
// Aquí se deberían validar los datos ingresados por el usuario

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['cname'] . "\n";
//$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
//$email_message .= "E-mail: " . $_POST['email'] . "\n";
//$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
//$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>