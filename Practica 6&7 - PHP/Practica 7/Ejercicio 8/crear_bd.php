<?php
$link =mysqli_connect("localhost", "root", "");
if (!$link) {
    die("Error de conexion: " . mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS prueba CHARACTER SET utf8 COLLATE utf8_general_ci");
mysqli_select_db($link, "prueba");
mysqli_query($link, "CREATE TABLE IF NOT EXISTS buscador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(150) NOT NULL
)");

$res = mysqli_query($link, "SELECT COUNT(*) as total FROM buscador");
$row = mysqli_fetch_assoc($res);
if ($row['total'] == 0) {
    mysqli_query($link, "INSERT INTO buscador (canciones) VALUES
    ('De musica ligera - Soda Stereo'),
    ('Flaca - Andres Calamaro'),
    ('Ji Ji Ji - Los Redondos'),
    ('Persiana americana - Soda Stereo'),
    ('Tratame suavemente - Soda Stereo'),
    ('Mariposa pontiac - Los redondos'),
    ('Mil horas - Los abuelos de la nada')");
}