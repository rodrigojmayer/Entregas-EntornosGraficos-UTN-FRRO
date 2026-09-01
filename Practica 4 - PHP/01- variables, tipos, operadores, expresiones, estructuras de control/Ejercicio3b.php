<!-- Ejercicio 3: 
Explicar para qué se utiliza el siguiente código: 

El siguiente código se utiliza para determinar si el usuario es mayor de edad (mayor de 21 años), permitiendo ingresar la edad por formulario.

-->


<html> 
<head>
    <title>Documento 2</title>
</head> 
    <body> 
        <?php 
            if (!isset($_POST['submit'])) { 
        ?> 
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
            Edad: <input name="age" size="2"> 
            <input type="submit" name="submit" value="Ir"> 
            </form> 
        <?php 
            } 
        else { 
            $age = $_POST['age']; 
            if ($age >= 21) { 
                echo 'Mayor de edad'; 
                } 
            else { 
                echo 'Menor de edad'; 
            } 
        } 
        ?> 
    </body>
</html>