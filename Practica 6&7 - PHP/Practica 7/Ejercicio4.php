<?php
if (isset($_GET['borrar'])) {
    setcookie('tipo_titular', '', time() - 3600, '/');
    header("Location: ejercicio4.php");
    exit();
}

if (isset($_POST['titular'])) {
    $tipo = $_POST['titular'];
    setcookie('tipo_titular', $tipo, time() + (86400 * 30), '/');
    header("Location: ejercicio4.php");
    exit();
}

$cookie_existe = isset($_COOKIE['tipo_titular']);
$tipo_actual = $cookie_existe ? $_COOKIE['tipo_titular'] : '';

$noticia_politica = "<div><h3> Noticia politica</h3><p>Los intendentes del PJ que afrontarán un recambio inédito si es que la ley de reelecciones no se revierte</p></div>";
$noticia_economica = "<div><h3> Noticia economica</h3><p>Refinanciación de deudas: claves y precauciones al negociar con un banco</p></div>";
$noticia_deportiva = "<div><h3> Noticia deportiva</h3><p>Dibu Martínez sufrió una fractura de mandíbula tras el duro golpe con un rival y debe ser operado</p></div>";

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>El diario de hoy</h1>
        <hr>

        <form method="POST" action="">
            <p>Selecciona el tipo de titular:</p>
            <label><input type="radio" name="titular" value="politica" <?= $tipo_actual == 'politica' ? 'checked' : '' ?>> Noticia politica</label><br>
            <label><input type="radio" name="titular" value="economica" <?= $tipo_actual == 'economica' ? 'checked' : '' ?>> Noticia economica</label><br>
            <label><input type="radio" name="titular" value="deportiva" <?= $tipo_actual == 'deportiva' ? 'checked' : '' ?>> Noticia deportiva</label><br>
            <button type="submit">Guardar preferencia</button>
        </form>
        <hr>
        <h2>Titulares del periodico</h2>

        <?php if (!$cookie_existe): ?>
            <?= $noticia_politica ?>
            <?= $noticia_economica ?>
            <?= $noticia_deportiva ?>
        <?php else: ?>
            <?php 
                if ($tipo_actual == 'politica') echo $noticia_politica;
                elseif ($tipo_actual == 'economica') echo $noticia_economica;
                elseif ($tipo_actual == 'deportiva') echo $noticia_deportiva; 
            ?>
        <?php endif; ?>

        <hr>
        <p><a href="ejercicio4.php?borrar=1">Borrar preferencia de cookie (Simular primera visita)</a></p>
    </body>
</html>