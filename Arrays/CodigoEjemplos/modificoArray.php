<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas

$planetas = array("Mercurio" , "Venus", "Tierra" ,"Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

//eliminamos Mercurio, que es el primero y corresponde a la clave 0, y eliminamos 1 solo valor.
array_splice($planetas, 0, 1);

//en el siguiente var_dump podemos observar que Mercurio ya no existe y ademas todos estan ordenados por clave.
var_dump($planetas);

?>