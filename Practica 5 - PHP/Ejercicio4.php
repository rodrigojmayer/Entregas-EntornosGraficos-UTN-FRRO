<?php
// 1. Iniciamos la sesión SIEMPRE en la primera línea, antes de cualquier texto u HTML
session_start();

// 2. Si la variable de sesión no existe, la inicializamos en 1
// Si ya existe, le sumamos 1 cada vez que el usuario carga o recarga la página
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4 - Contador de Visitas</title>
    </head>
    <body>
        <h2>Contador de Páginas Visitadas</h2>
        <p>
            Has visitado <b><?php echo $_SESSION['contador']; ?></b> página(s) durante esta sesión.
        </p>
        <p>
            <a href="Ejercicio4.php">Navegar / Recargar página</a>
        </p>
        <p>
            <a href="Ejercicio4.php?reiniciar=true">Reiniciar contador</a>
        </p>
        <?php
        if (isset($_GET['reiniciar'])) {
            unset($_SESSION['contador']);
            header("Location: Ejercicio4.php");
            exit();
        }
        ?>
    </body>
</html>