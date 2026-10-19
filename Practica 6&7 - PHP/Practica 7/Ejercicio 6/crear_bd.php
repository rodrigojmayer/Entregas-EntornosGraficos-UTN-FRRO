<?php
$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die("Error de conexion al servidor: " . mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS base CHARACTER SET utf8 COLLATE utf8_general_ci");

mysqli_select_db($link, "base");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS alumnos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    codigocurso INT NOT NULL,
    mail VARCHAR(100) NOT NULL
)");

$res_check = mysqli_query($link, "SELECT COUNT(*) as total FROM alumnos");
$row_check = mysqli_fetch_assoc($res_check);

if ($row_check['total'] == 0) {
    mysqli_query($link, "INSERT INTO alumnos (nombre, codigocurso, mail) VALUES
    ('Emilio Rodriguez', 1, 'erodriguez@gmail.com'),
    ('Carla Saenz', 2, 'carlasnz@hotmail.com'),
    ('Roberto Kein', 1, 'rkein@smail.com')");
}
