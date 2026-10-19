<?php
    require_once 'crear_bd.php';

    if (isset($_POST['guardar'])) {
        $id = $_POST['id'] ?? '';
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $habitantes = $_POST['habitantes'];
        $superficie = $_POST['superficie'];
        $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

        if ($id == "") {
            $query = "INSERT INTO ciudad (ciudad, pais, habitantes, superficie, tieneMetro)
                        VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$tieneMetro')";    
        } else {
            $query = "UPDATE ciudad SET ciudad='$ciudad', pais='$pais', habitantes='$habitantes', superficie='$superficie', tieneMetro='$tieneMetro' WHERE id=$id";
        }

        mysqli_query($link, $query);
        header("Location: Ejercicio2.php");
        exit();
    }

    if (isset($_GET['eliminar'])) {
        $id = $_GET['eliminar'];
        mysqli_query($link, "DELETE FROM ciudad WHERE id=$id");
        header("Location: Ejercicio2.php");
        exit();
    }
    
    $id_mod = ""; $ciu_mod = ""; $pai_mod = ""; $sup_mod = ""; $met_mod = ""; $hab_mod = "";
    if (isset($_GET['editar'])) {
        $id = $_GET['editar'];
        $res = mysqli_query($link, "SELECT * FROM ciudad WHERE id=$id");
        if ($row = mysqli_fetch_assoc($res)) {
            $id_mod = $row['id'];
            $ciu_mod = $row['ciudad'];
            $pai_mod = $row['pais'];
            $hab_mod = $row['habitantes'];
            $sup_mod = $row['superficie'];
            $met_mod = $row['tieneMetro'];
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ABML Ciudades - Ejercicio 2</title>
        <style>
            table {
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
            thead tr {
                background-color: #d3d3d3;
            }
        </style>
    </head>
    <body>
        <h2>ABML de Ciudades</h2>
    <div>
        <h4><?= $id_mod == "" ? "Registrar Nueva Ciudad" : "Modificar Ciudad (ID: $id_mod)" ?></h4>
        <form method="POST" action="Ejercicio2.php">
            <!-- Campo oculto para saber si estamos editando -->
            <input type="hidden" name="id" value="<?= $id_mod ?>">

            <div>
                <div>
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" value="<?= $ciu_mod ?>" required>
                </div>
                <div>
                    <label>Pais</label>
                    <input type="text" name="pais" value="<?= $pai_mod ?>" required>
                </div>
                <div>
                    <label>Habitantes</label>
                    <input type="number" name="habitantes" value="<?= $hab_mod ?>" required>
                </div>
                <div>
                    <label>Superficie</label>
                    <input type="number" step="0.01" name="superficie" value="<?= $sup_mod ?>" required>
                </div>
                <div>
                    <div>
                        <input type="checkbox" name="tieneMetro" value="1" <?= $met_mod == 1 ? 'checked' : '' ?>>
                        <label>Tiene Metro</label>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" name="guardar">
                    <?= $id_mod == "" ? "Guardar Ciudad" : "Actualizar Cambios" ?>
                </button>
                <?php if ($id_mod != ""): ?>
                    <a href="Ejercicio2.php">Cancelar</a>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <h4>Listado de Ciudades</h4>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th>Habitantes</th>
                    <th>Superficie</th>
                    <th>Tiene Metro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $resultado = mysqli_query($link, "SELECT * FROM ciudad");
                if (mysqli_num_rows($resultado) === 0):
                ?>
                    <tr>
                        <td colspan="7">No hay ciudades registradas.</td>
                    </tr>
                <?php else:
                    while ($row = mysqli_fetch_assoc($resultado)):
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['ciudad']) ?></td>
                        <td><?= htmlspecialchars($row['pais']) ?></td>
                        <td><?= number_format($row['habitantes'], 0, ',', '.') ?></td>
                        <td><?= number_format($row['superficie'], 2, ',', '.') ?></td>
                        <td><?= $row['tieneMetro'] ? 'Sí' : 'No' ?></td>
                        <td>
                            <a href="Ejercicio2.php?editar=<?= $row['id'] ?>" >Editar</a>
                            <a href="Ejercicio2.php?eliminar=<?= $row['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar esta ciudad?');">Eliminar</a>
                        </td>
                    </tr>
                <?php 
                    endwhile;
                endif; 
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
<?php 
mysqli_close($link); 
?>