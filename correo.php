<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes realizar validaciones adicionales antes de enviar el correo

    // Destinatario y asunto
    $destinatario = "camisoddu@gmail.com";
    $asunto = "Mensaje de contacto desde el sitio web";

    // Construir el mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n $mensaje";

    // Enviar el correo
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redireccionar o mostrar un mensaje de confirmación
    echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
}
?>
