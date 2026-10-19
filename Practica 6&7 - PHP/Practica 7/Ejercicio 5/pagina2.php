<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5 pagina 2</title>
    </head>
    <body>
        <h2>Variables de sesion creadas con exito</h2>
        <p>Los datos han sido almacenados en las variables de sesion del servidor.</p>
        <p><a href="pagina3.php">Ir a la pagina 3 (recuperar datos)</a></p>
    </body>
</html>
