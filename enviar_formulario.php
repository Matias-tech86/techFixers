<?php

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Dirección de correo a la que se enviará el mensaje
$destinatario = 'tucorreo@ejemplo.com'; // Reemplaza con tu dirección de correo electrónico

// Asunto del mensaje
$asunto = 'Mensaje desde el formulario de contacto';

// Construir el cuerpo del mensaje
$cuerpoMensaje = "Nombre: $nombre\n";
$cuerpoMensaje .= "Correo electrónico: $email\n\n";
$cuerpoMensaje .= "Mensaje:\n$mensaje";

// Cabeceras del correo
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Enviar el correo electrónico usando la función mail()
if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
    echo '<p>¡El mensaje se ha enviado correctamente!</p>';
} else {
    echo '<p>Hubo un problema al enviar el mensaje. Por favor, inténtalo más tarde.</p>';
}

?>
