 <!-- Ejercicio 4:
Si el archivo datos.php contiene el código que sigue: 

< ?php 
     $color = 'blanco'; 
     $flor = 'clavel'; 
?>

Indicar las salidas que produce el siguente código. Justificar.  -->

<?php 
    echo "El $flor $color \n";  
    include 'datos.php'; 
    echo " El $flor $color";  
?>  

<!-- Las salidas son dos Warning:Undefined variable $flor y $color, del primer echo que aun no tiene definidas las variables de datos.php, y luego se imprime "El El clavel blanco" con las variables ya definidas, (el primer "El" es del primer echo) -->