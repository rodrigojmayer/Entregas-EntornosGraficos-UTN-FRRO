<?php
session_start();
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'No definido';
$clave = isset($_SESSION['clave']) ? $_SESSION['clave'] : 'No definida';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5 pagina 3</title>
    </head>
    <body>
        <h2>Datos recuperados de las variables de sesion</h2>
        <p>Usuario almacenado: <?= htmlspecialchars($usuario) ?></p>
        <p>Clave almacenada: <?= htmlspecialchars($clave) ?></p>
        <br>
        <p><a href="pagina1.php">Volver al formulario (pagina 1)</a></p>
    </body>
</html>