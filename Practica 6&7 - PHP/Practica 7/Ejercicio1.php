<?php
    if (isset($_POST['estilo'])) {
        $estilo_elegido = $_POST['estilo'];
        setcookie("estilo_usuario", $estilo_elegido, time() + (86400 * 30), "/");
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    $estilo_actual = isset($_COOKIE['estilo_usuario']) ? $_COOKIE['estilo_usuario'] : 'claro';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
        <style>
            .claro {
                background-color: #ffffff;
                color: #000000;
            }
            .oscuro {
                background-color: #222222;
                color: #ffffff;
            }
            .beige {
                background-color: #d4cdb9;
                color: #24183f;
            }
        </style>
    </head>
    <body class="<?= $estilo_actual ?>">
        <h2>Recordar Estilos con Cookies</h2>
        <p>Estilo actual aplicado: <strong><?= $estilo_actual ?></strong></p>

        <form method="POST" action="">
            <select name="estilo" id="estilo">
                <option value="claro" <?= $estilo_actual == 'claro' ? 'selected' : '' ?>>Claro</option>
                <option value="oscuro" <?= $estilo_actual == 'oscuro' ? 'selected' : '' ?>>Oscuro</option>
                <option value="beige" <?= $estilo_actual == 'beige' ? 'selected' : '' ?>>Beige</option>
            </select>
            <button type="submit">Aplicar y Recordar</button>
        </form>
    </body>
</html>


