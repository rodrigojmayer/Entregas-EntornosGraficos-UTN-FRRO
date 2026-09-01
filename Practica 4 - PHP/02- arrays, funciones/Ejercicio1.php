<!-- Ejercicio 1: 
Indicar si los siguientes códigos son equivalentes. 

Si, los siguientes códigos son equivalentes.
Array ( [color] => rojo [sabor] => dulce [forma] => redonda [nombre] => manzana [0] => 4 )
-->

<?php 
    $a = array( 
        'color'  => 'rojo', 
        'sabor'  => 'dulce', 
        'forma'  => 'redonda', 
        'nombre' => 'manzana', 
        4         
    ); 
    print_r($a);
    
?> 

<hr style="height: 5px; background-color: black; border: none;">

<?php 
    $b['color']  = 'rojo'; 
    $b['sabor']  = 'dulce'; 
    $b['forma']  = 'redonda'; 
    $b['nombre'] = 'manzana'; 
    $b[] = 4; 
    print_r($b);
?>  