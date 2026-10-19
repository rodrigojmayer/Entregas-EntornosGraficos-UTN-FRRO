<?php
$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die("Error de conexión al servidor: " . mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS Capitales CHARACTER SET utf8 COLLATE utf8_general_ci");

mysqli_select_db($link, "Capitales");

// mysqli_query($link, "DROP DATABASE IF EXISTS Capitales");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS ciudad (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(100) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    habitantes INT NOT NULL,
    superficie DECIMAL(10,2) NOT NULL,
    tieneMetro TINYINT(1) NOT NULL
)");

$res_check = mysqli_query($link, "SELECT COUNT(*) as total FROM ciudad");
$row_check = mysqli_fetch_assoc($res_check);
if ($row_check['total'] == 0) {
    mysqli_query($link, "INSERT INTO ciudad (ciudad, pais, habitantes, superficie, tieneMetro) VALUES
    ('México D.F.', 'México', 555666.00, 2343434, 1),
    ('Barcelona', 'España', 444333.00, 1111110, 1),
    ('Buenos Aires', 'Argentina', 888111.00, 3333330, 1),
    ('Medellín', 'Colombia', 999222.00, 2222220, 1),
    ('Lima', 'Perú', 999111.00, 8888880, 0)");
}