<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Asegúrate de que la ruta sea correcta
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'davidpaltito@gmail.com'; // Tu correo de Gmail
        $mail->Password = 'Dinosaurio'; // Tu contraseña o contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Usar TLS
        $mail->Port = 587; // Puerto para TLS

        // Remitente y destinatario
        $mail->setFrom($_POST['correo'], $_POST['nombre']); // Correo y nombre del remitente
        $mail->addAddress('davidpajuegos@gmail.com'); // Correo del destinatario

        // Contenido del correo
        $mail->isHTML(false); // Usar texto plano
        $mail->Subject = 'Nueva respuesta del cuestionario'; // Asunto del correo
        $mail->Body = "Nombre: {$_POST['nombre']}\nApellido: {$_POST['apellido']}\nTeléfono: {$_POST['telefono']}\nCorreo: {$_POST['correo']}\nPokemon favorito: {$_POST['pokemon']}";

        // Enviar el correo
        $mail->send();
        echo "¡Gracias! Tu respuesta ha sido enviada.";
    } catch (Exception $e) {
        echo "Hubo un error al enviar tu respuesta. Inténtalo de nuevo. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Acceso no autorizado.";
}
?>