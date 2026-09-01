<!-- Ejercicio 3: 
En cada caso, indicar las salidas correspondientes: -->

<!-- a) -->
<?php 
    $fun = getdate(); 
    echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] 
    segundos, del $fun[mday]/$fun[mon]/$fun[year]"; 

    // Has entrado en esta pagina a las 22 horas, con 54 minutos y 5 segundos, del 1/9/2026
?> 

<hr style="height: 5px; background-color: black; border: none;">

<!-- b) -->
<?php 
    function sumar($sumando1,$sumando2){  
        $suma=$sumando1+$sumando2;   
        echo $sumando1."+".$sumando2."=".$suma;  
    }  
    sumar(5,6); 

    // 5+6=11
?> 