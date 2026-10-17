<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"] ?? '';
    $email  = $_POST["email"] ?? '';
    $texto  = $_POST["texto"] ?? '';

    $destino = "rodrigojmayer@gmail.com";
    $asunto  = "Comentario desde la Web";

    $mensaje = "
    <html>
    <body>
        <h2>Comentario recibido</h2>
        <p><b>Nombre:</b> $nombre</p>
        <p><b>Email:</b> $email</p>
        <p><b>Comentario:</b> $texto</p>
    </body>
    </html>
    ";

    $headers  = "From: Rodrigo <rodrigojmayer@gmail.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Simulamos el envío exitoso para entornos locales
    $envioSimulado = true; 

    if ($envioSimulado || mail($destino, $asunto, $mensaje, $headers)) {
        echo "<h2>¡Simulación exitosa! Los datos se procesaron correctamente por POST.</h2>";
        echo "<p><b>Para:</b> $destino</p>";
        echo "<p><b>Asunto:</b> $asunto</p>";
        echo "<hr>";
        echo "<h3>Cuerpo del mensaje que se enviaría:</h3>";
        echo $mensaje; // Muestra el HTML estructurado tal como saldría en el correo
        echo "<br><a href='Ejercicio2.html' class='btn btn-primary'>Volver</a>";
    } else {
        echo "<h2>Error al enviar el mensaje.</h2>";
        echo "<a href='Ejercicio2.html'>Volver a intentar</a>";
    }

} else {
    // Si entran directamente al archivo PHP sin enviar el formulario, redirige al HTML
    header("Location: Ejercicio2.html");
    exit();
}
?>