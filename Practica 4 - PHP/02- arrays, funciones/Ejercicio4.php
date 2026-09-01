<!-- Ejercicio 4: 
Analizar la siguiente función, y escribir un script para probar su funcionamiento: -->

<?php 
    function comprobar_nombre_usuario($nombre_usuario){  
    //compruebo que el tamaño del string sea válido.  
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){  
        echo $nombre_usuario . " no es válido<br>";  
        return false;  
    }  
    
    //compruebo que los caracteres sean los permitidos  
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_";  
    
    for ($i=0; $i<strlen($nombre_usuario); $i++){  
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){  
            echo $nombre_usuario . " no es válido<br>";  
            return false;  
        }  
    }  
    echo $nombre_usuario . " es válido<br>";  
    return true;  
    };
    
    comprobar_nombre_usuario("Pepe");   
    comprobar_nombre_usuario("Pep@");
    comprobar_nombre_usuario("nombreconmasde20caracteres");
    comprobar_nombre_usuario("ab");

    // Pepe es válido
    // Pep@ no es válido
    // nombreconmasde20caracteres no es válido
    // ab no es válido
?> 