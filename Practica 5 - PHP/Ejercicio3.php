<?php
    // Si el usuario presionó el botón de Enviar
    if (isset($_POST['enviar'])) {

        // 1. Guardamos los datos de las cajitas de texto en variables
        $nombre     = $_POST['nombre'];
        $email      = $_POST['email'];
        $nombre_amigo = $_POST['nombre_amigo'];
        $email_amigo  = $_POST['email_amigo'];

        // 2. Definimos a quién le llega y el asunto
        $destino = $email_amigo;
        $asunto  = "$nombre te recomienda un sitio web";

        // 3. Armamos el mensaje de texto simple
        $mensaje = "Hola $nombre_amigo,\n\n";
        $mensaje .= "$nombre ($email) te recomienda visitar este sitio web:\n";
        $mensaje .= "http://localhost/practica5/\n";

        // 4. Cabecera con el remitente
        $desde = "From: Rodrigo <rodrigojmayer@gmail.com>";

        // 5. Simulación de envío para evitar errores con el puerto 25 en local
        $envioSimulado = true;

        // 5. Enviamos el mail (o simulamos el éxito) y mostramos el resultado
        if ($envioSimulado || mail($destino, $asunto, $mensaje, $desde)) {
            echo "<h2>¡Simulación exitosa! Mail enviado a $nombre_amigo con éxito.</h2>";
            echo "<hr>";
            echo "<p><b>Destino:</b> $destino</p>";
            echo "<p><b>Asunto:</b> $asunto</p>";
            echo "<p><b>Mensaje:</b></p>";
            echo "<pre>$mensaje</pre>";
        } else {
            echo "<h2>No se pudo enviar el mail.</h2>";
        }

        echo "<a href='Ejercicio3.php'>Volver</a>";

    } else {
        // Si recién entra a la página, mostramos el formulario
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>

        <h2>Recomienda este sitio a un amigo</h2>

        <form action="Ejercicio3.php" method="post">
            <p>Nombre: <input type="text" name="nombre" required></p>
            <p>Email: <input type="email" name="email" required></p>
            <p>Nombre de amigo: <input type="text" name="nombre_amigo" required></p>
            <p>Email de amigo: <input type="email" name="email_amigo" required></p>
            
            <input type="submit" name="enviar" value="Enviar recomendación">
        </form>

    </body>
</html>

<?php
    }
?>