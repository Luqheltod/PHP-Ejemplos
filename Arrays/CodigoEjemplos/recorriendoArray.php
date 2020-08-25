<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas

$planetas[] = "mercurio";

$planetas[] = "venus";

$planetas[] = "tierra";

$planetas[] = "marte";

$planetas[] = "jupiter";

$planetas[] = "saturno";

$planetas[] = "urano";

$planetas[] = "neptuno";


//vamos a recorrerlo con un bucle for normal. Utilizamos count, que devuelve la cantidad de elementos del array.

for ($i = 0; $i < count($planetas); $i++) {
    
    //dentro del for, escribimos un pequeño texto, indicamos que el numero
    // de planetas es +1 puesto que empezariamos por 0, y para la clave del array volvemos a usar la misma $i
    //el for se seguira repitiendo mientras que $i sea mas pequeño que la dimension del array count($planetas)
    
    echo "El planeta " . ($i+1) . " es $planetas[$i]" . "<br>";
    
}


//Ahora vamos a usar el bucle foreach.


$numero =1;
foreach ($planetas as $valor) {
    
    
    echo "El planeta " . $numero . " es $valor" . "<br>";
    
    $numero++;
}


?>