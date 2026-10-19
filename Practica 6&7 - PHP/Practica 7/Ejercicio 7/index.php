<?php
session_start();
require_once 'crear_bd.php';

if (isset($_GET['comprar'])) {
    $id_prod = $_GET['comprar'];

    $res = mysqli_query($link, "SELECT * FROM catalogo WHERE id = $id_prod");
    if ($row = mysqli_fetch_assoc($res)) {
        if (isset($_SESSION['carrito'][$id_prod])) {
            $_SESSION['carrito'][$id_prod]['cantidad']++;
        } else {
            $_SESSION['carrito'][$id_prod] = [
                'producto' => $row['producto'],
                'precio' => $row['precio'],
                'cantidad' => 1
            ];
        }
    }
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Catalogo carrigo de compras</title>
    </head>
    <body>
        <h2>Catalogo de productos</h2>
        <p><a href="carrito.php">Ver carrito de compras (<?= isset($_SESSION['carrito']) ? array_sum(array_column($_SESSION['carrito'], 'cantidad')) : 0 ?> items)</a></p>
        <table border="1" cellpadding="8" style="border-collapse: collapse;">
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Accion</th>
            </tr>
            <?php
            $resultado = mysqli_query($link, "SELECT * FROM catalogo");
            while ($row = mysqli_fetch_assoc($resultado)):
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['producto']) ?></td>
                <td>$ <?= number_format($row['precio'], 2, ',', '.') ?></td>
                <td><a href="index.php?comprar=<?= $row['id'] ?>">Comprar</a></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>
<?php mysqli_close($link); ?>