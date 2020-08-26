<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas

$planetas = array("Mercurio" , "Venus", "Tierra" ,"Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

//eliminamos Mercurio, que es el primero y corresponde a la clave 0
unset($planetas[0]);

//en el siguiente var_dump podemos observar que Mercurio ya no se encuentra en el array planetas
var_dump($planetas);

?>