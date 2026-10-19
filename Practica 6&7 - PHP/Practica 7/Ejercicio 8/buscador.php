<?php
require_once 'crear_bd.php';

$busqueda = "";
if (isset($_POST['buscar'])) {
    $busqueda = trim($_POST['termino']);
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 8 Buscador de canciones</title>
        <style>
            table {
                border-collapse: collapse;
                margin-top: 15px;
            }
            table, th, td {
                border: 1px solid black;
                padding: 8px;
            }
            th {
                background-color: #d3d3d3;
            }
        </style>
    </head>
    <body>
        <h2>Buscador de canciones</h2>
        <form action="" method="POST">
            <label>Ingrese parte del nombre de la cancion:</label><br><br>
            <input type="text" name="termino" value="<?= htmlspecialchars($busqueda) ?>" required>
            <button type="submit" name="buscar">Buscar</button>
            <?php if ($busqueda != ""): ?>
                <a href="buscador.php">Ver todas</a>
            <?php endif ; ?>
        </form>
        <br>
        <hr>

        <h3>Resultados de la busqueda</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Cancion</th>
            </tr>
            <?php
            if ($busqueda != "") {
                $termino_seguro = mysqli_real_escape_string($link, $busqueda);
                $query = "SELECT * FROM buscador WHERE canciones LIKE '%$termino_seguro%'";
            } else {
                $query = "SELECT * FROM buscador";
            }
            $resultado = mysqli_query($link, $query);
            if (mysqli_num_rows($resultado) === 0):
            ?>
                <tr>
                    <td colspan="2">No se encontraron canciones que coincidan con la busqueda.</td>
                </tr>
            <?php
            else:
                while ($row = mysqli_fetch_assoc($resultado)):
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['canciones']) ?></td>
                </tr>
            <?php
                endwhile;
            endif;
            ?>
        </table>
    </body>
</html>