<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Configura el correo electrónico
    $destinatario = "franciscopagnotta@gmail.com";
    $asunto_email = "Nuevo mensaje desde la pagina de Holographik";

    // Crea el cuerpo del mensaje
    $cuerpo_email = "Nombre: $nombre\n";
    $cuerpo_email .= "Correo Electrónico: $correo\n";
    $cuerpo_email .= "Asunto: $asunto\n";
    $cuerpo_email .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto_email, $cuerpo_email);

    // Redirige al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit;
}
?>