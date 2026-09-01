<!-- Ejercicio 2: 
Indicar si los siguientes códigos son equivalentes.  

Los códigos en a, b y c son equivalentes respectivamente.

-->

<?php 
    echo "a) ";
    echo "Si, son equivalentes.";
    echo "</br>";
    echo "1)";
    echo "</br>";
    $i = 1; 
    while ($i <= 10) { 
        print $i++;   
    } 
?> 
 
<?php 
    echo "<hr>";
    echo "2)";
    echo "</br>";
    $i = 1; 
    while ($i <= 10): 
        print $i; 
        $i++; 
    endwhile; 
?> 
 
<?php 
    echo "<hr>";
    echo "3)";
    echo "</br>";
    $i = 0; 
    do { 
        print ++$i; 
    } while ($i<10); 
    
?>

<hr style="height: 5px; background-color: black; border: none;">

<?php 
    echo "b) ";
    echo "Si, son equivalentes.";
    echo "</br>";
    echo "1)";
    echo "</br>";
    for ($i = 1; $i <= 10; $i++) { 
        print $i; 
    } 
?> 
 
<?php 
    echo "<hr>";
    echo "2)";
    echo "</br>";
    for ($i = 1; ;$i++) { 
        if ($i > 10) { 
            break; 
        } 
        print $i; 
    } 
?> 
 
<?php 
    echo "<hr>";
    echo "3)";
    echo "</br>";
    $i = 1; 
    for (;;) { 
        if ($i > 10) { 
            break; 
        } 
        print $i; 
        $i++; 
    } 
?> 
 
<?php 
    echo "<hr>";
    echo "4)";
    echo "</br>";
    for ($i = 1; $i <= 10; print $i, $i++) ; 
?> 

<hr style="height: 5px; background-color: black; border: none;">

<?php 
    echo "c) ";
    echo "Si, son equivalentes.";
    echo "</br>";
    echo "1)";
    echo "</br>";
    // … 
    // … 
    $i = 1;
    if ($i == 0) { 
        print "i equals 0"; 
    } elseif ($i == 1) { 
        print "i equals 1"; 
    } elseif ($i == 2) { 
        print "i equals 2"; 
    } 
?> 
 
<?php 
    echo "<hr>";
    echo "2)";
    echo "</br>";
    // … 
    // … 
    switch ($i) { 
        case 0: 
            print "i equals 0"; 
            break; 
        case 1: 
            print "i equals 1"; 
            break; 
        case 2: 
            print "i equals 2"; 
            break; 
    } 
?>