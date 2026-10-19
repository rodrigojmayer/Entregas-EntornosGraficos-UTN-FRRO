<?php
session_start();

if (isset($_GET['vaciar'])) {
    unset($_SESSION['carrito']);
    header("Location: carrito.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Carrito de compras</title>
    </head>
    <body>
        <h2>Tu carrito de compras</h2>
        <?php if (empty($_SESSION['carrito'])): ?>
            <p>El carrito esta vacio.</p>
        <?php else: ?>
            <table border="1" cellpadding="8" style="border-collapse: collapse;">
                <tr>
                    <th>Producto</th>
                    <th>Precio unitario</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                <?php
                $total_general = 0;
                foreach ($_SESSION['carrito'] as $id => $item):
                    $subtotal = $item['precio'] * $item['cantidad'];
                    $total_general += $subtotal;
                ?>
                <tr>
                    <td><?= htmlspecialchars($item['producto']) ?></td>
                    <td>$ <?= number_format($item['precio'], 2, ',', '.') ?></td>
                    <td><?= $item['cantidad'] ?></td>
                    <td>$ <?= number_format($subtotal, 2, ',', '.') ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" align="right">Total general:</td>
                    <td>$<?= number_format($total_general, 2, ',', '.') ?></td>
                </tr>
            </table>
            <br>
            <a href="carrito.php?vaciar=1">Vaciar carrito</a>
        <?php endif; ?>
        <br><br>
        <p><a href="index.php">Volver al catalogo</a></p>
    </body>
</html>