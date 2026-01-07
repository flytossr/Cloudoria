<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $mensaje = $_POST["message"];

    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head><meta charset='UTF-8'><title>Mensaje enviado</title></head>";
    echo "<body>";
    echo "<h2>Mensaje enviado correctamente</h2>";
    echo "<p>Gracias, <strong>$nombre</strong>.</p>";
    echo "<p>Hemos recibido tu mensaje:</p>";
    echo "<p><em>$mensaje</em></p>";
    echo "<p>Te responderemos al correo: <strong>$email</strong></p>";
    echo "<br>";
    echo "<a href='index.html'>Volver a la web</a>";
    echo "</body></html>";
}
?>