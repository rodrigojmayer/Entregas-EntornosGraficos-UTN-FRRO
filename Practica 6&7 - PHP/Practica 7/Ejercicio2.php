<?php
if (!isset($_COOKIE['contador'])) {
    $contador = 1;
    setcookie('contador', $contador, time() + (86400 * 30), '/');
    $primera_vez = true;
} else {
    $contador = $_COOKIE['contador'] + 1;
    setcookie('contador', $contador, time() + (86400 * 30), '/');
    $primera_vez = false;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h2>Contador de Visitas</h2>

        <?php if ($primera_vez): ?>
            <p>Bienvenido!!!</p>
        <?php else: ?>
            <p>Otra vez por aqui? Esta es tu visita numero <?= $contador ?>.</p>
        <?php endif; ?>
        <br>
        <button onclick="location.reload();">Actualizar pagina</button>
    </body>
</html>