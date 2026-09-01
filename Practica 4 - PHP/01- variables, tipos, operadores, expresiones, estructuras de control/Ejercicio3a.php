<!-- Ejercicio 3: 
Explicar para qué se utiliza el siguiente código: 
    
    El siguiente código se utiliza para generar una tabla, eligiendo la cantidad de filas con la variable $row, y la cantidad de columnas con la variable $col.
    
-->


<html> 
    <head>
        <title>Documento 1</title>
    </head> 
    <body> 
        <?php 
            echo "<table width = 90% border = '1' >"; 
            $row = 5; 
            $col = 2; 
            for ($r = 1; $r <= $row; $r++) { 
                echo "<tr>";  
                for ($c = 1; $c <= $col;$c++) { 
                    echo "<td>&nbsp;</td>\n"; 
                }      echo "</tr>\n"; 
            } 
            echo "</table>\n"; 
        ?> 
    </body>
</html>