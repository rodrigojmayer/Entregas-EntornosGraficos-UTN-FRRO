<?php
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    setcookie('ultimo_usuario', $usuario, time() + (86400 * 30), '/');
    $ultimo = $usuario;
} else {
    $ultimo = isset($_COOKIE['ultimo_usuario']) ? $_COOKIE['ultimo_usuario'] : '';
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <form method="POST" action="">
            <label>Nombre de usuario:</label>
            <input type="text" name="usuario" required>
            <button type="submit">Crear cookie</button>
        </form>

        <?php if ($ultimo !== ''): ?>
            <p>Ultimo usuario: <?= htmlspecialchars($ultimo) ?></p>
        <?php endif; ?>
    </body>
</html>