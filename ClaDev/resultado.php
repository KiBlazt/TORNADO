<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $corre = htmlspecialchars($_POST['correo']);
    $pokemon = htmlspecialchars($_POST['pokemon']);

    // Destinatario del correo
    $destinatario = "davidpajuegos@gmail.com"; // Cambia esto por tu correo

    // Asunto del correo
    $asunto = "Nueva respuesta del cuestionario";

    // Cuerpo del correo
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "apellido: $apellido\n";
    $mensaje .= "telefono:\n$telefono\n";
    $mensaje .= "correo:\n$correo\n";
    $mensaje .= "pokemon:\n$pokemon\n";

    // Cabeceras del correo
    $cabeceras = "From: $email" . "\r\n" .
                 "Reply-To: $email" . "\r\n" .
                 "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "¡Gracias! Tu respuesta ha sido enviada.";
    } else {
        echo "Hubo un error al enviar tu respuesta. Inténtalo de nuevo.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>