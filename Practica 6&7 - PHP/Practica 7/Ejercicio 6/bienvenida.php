<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6 bienvenida</title>
    </head>
    <body>
        <h2>Tercera pagina validacion</h2>
        <?php if (isset($_SESSION['nombre'])): ?>
            <p>Bienvenido al sistema, <?= htmlspecialchars($_SESSION['nombre']) ?></p>
        <?php else: ?>
            <p>Acceso denegado: No podes visitar esta pagina.</p>
        <?php endif; ?>
        <br>
        <p><a href="index.php">Volver al inicio</a></p>
    </body>
</html>