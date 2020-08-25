<?php
//gsprogramacion.com



$planetas[] = "mercurio";

$planetas[] = "venus";

$planetas[] = "tierra";

$planetas[] = "marte";

$planetas[] = "jupiter";


//utilizamos una funcion de string en esta frase y mercurio nos aparece con mayusculas.
echo ucwords($planetas[0]) . " es el primer planeta";

//vemos que mercurio sigue estando en minusculas
var_dump($planetas);
?>