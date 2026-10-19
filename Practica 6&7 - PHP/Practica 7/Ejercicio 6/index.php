<?php
require_once 'crear_bd.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6 Ingreso</title>
    </head>
    <body>
        <h2>Ingresar mail del alumno</h2>
        <form action="verificar.php" method="POST">
            <label>Correo electrónico:</label><br>
            <input type="email" name="mail" required><br><br>
            <button type="submit">Consultar</button>
        </form>
    </body>
</html>