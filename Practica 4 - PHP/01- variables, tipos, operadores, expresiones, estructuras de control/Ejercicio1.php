<!-- Ejercicio 1:  
En el siguiente código identificar: 
• las variables y su tipo 
    $a tipo boolean
    $b tipo string
    $c tipo string
    $d tipo integer
    $f tipo integer
    $g tipo integer
    $i tipo integer
• los operadores 
    * operador de multiplicacion, tipo binario
    = operador de asignacion, tipo binario
    += operador de suma y asignación, tipo binario
    ? : operador condicional, ternario
    ++ operador incremento, tipo unario
        Pre-incremento: ++$d (incrementa antes de evaluar).
        Post-incremento: $d++ (evalúa/usa el valor actual y luego incrementa).
• las funciones y sus parámetros 
    Definida por el usuario:
        - doble($i)
    De PHP:
        - gettype($a)
        - is_int($d)
        - id_string($a)
• las estructuras de control 
    Condicionales if:
        - if (is_int($d)) {};
        - if (is_string($a)) {};
    Operador ternario $d = $a ? ++$d : $d*3; 
• cuál es la salida por pantalla  
    booleanstringstringinteger1xyzxyz184444

-->

<?php 
function doble($i) { 
    return $i*2; 
} 
$a = TRUE;    
$b = "xyz";    
$c = 'xyz';   
$d = 12;      
echo gettype($a);  
echo gettype($b);  
echo gettype($c); 
echo gettype($d); 
if (is_int($d)) { 
    $d += 4; 
} 
if (is_string($a)) { 
    echo "Cadena: $a"; 
} 
$d = $a ? ++$d : $d*3; 
$f = doble($d++); 
$g = $f += 10; 
echo $a, $b, $c, $d, $f , $g; 
?>  