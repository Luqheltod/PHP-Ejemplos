<?php

// gsprogramacion
$planetas = "mercurio venus tierra marte jupiter saturno urano";

// el valor -1 es opcional, si lo ponemos, el ultimo valor se omite, si no ponemos nada se considera un 1, y el ultimo valor se incluye
// aqui convertimos en un array el string anterior
$arrayPlanetas = explode(" ", $planetas, - 1);

var_dump($arrayPlanetas);

// y aqui convertimos en un string el array anterior.
$planetasComas = implode(",", $arrayPlanetas);

echo $planetasComas;
?>