<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Dirección de correo a la que se enviará el formulario
    $destinatario = "luemadiaz1@gmail.com";

    // Asunto del correo
    $asunto = "Respuesta";

    // Cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $email\r\nReply-To: $email";

    // Intenta enviar el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras)) {
        echo "¡Gracias por contestar Analia!";
    } else {
        echo "Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo.";
    }
}
?>
