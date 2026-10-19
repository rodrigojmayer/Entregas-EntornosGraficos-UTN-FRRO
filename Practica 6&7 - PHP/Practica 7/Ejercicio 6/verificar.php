<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "base");
mysqli_set_charset($link, "utf8");

$mail = $_POST['mail'] ?? '';
$encontrado = false;

if ($mail != "") {
    $res = mysqli_query($link, "SELECT nombre FROM alumnos WHERE mail = '$mail'");
    if ($row = mysqli_fetch_assoc($res)) {
        $_SESSION['nombre'] = $row['nombre'];
        $encontrado = true;
    } else {
        unset($_SESSION['nombre']);
    }
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6 Verificacion</title>
    </head>
    <body>
        <h2>Resultado de la busqueda</h2>
        <?php if ($encontrado): ?>
            <p>El mail se encuentra registrado. Variable de sesion creada con exito.</p>
            <?php else: ?>
                <p>El mail ingresado no existe en la base de datos.</p>
            <?php endif; ?>

            <br>
            <p><a href="bienvenida.php">Ir a la tercera pagina</a></p>
            <p><a href="index.php">Volver al formulario</a></p>
    </body>
</html>