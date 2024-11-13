<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "lkplmz@gmail.com";
    $subject = "Nuevo mensaje del formulario web";
    $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>