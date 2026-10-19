<?php
$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die("Error de conexion: " . mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS Compras CHARACTER SET utf8 COLLATE utf8_general_ci");
mysqli_select_db($link, "Compras");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100) NOT NULL,
    precio DECIMAL(9,2) NOT NULL
)");

$res = mysqli_query($link, "SELECT COUNT(*) as total FROM catalogo");
$row = mysqli_fetch_assoc($res);
if ($row['total'] == 0) {
    mysqli_query($link, "INSERT INTO catalogo (producto, precio) VALUES
    ('Mouse Inalambrico', 15000.00),
    ('Notebook Lenovo', 750000.00),
    ('Teclado Mecanico', 45000.00)");
}