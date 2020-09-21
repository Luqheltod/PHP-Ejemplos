<?php
//gsprogramacion.com

require_once("model/Animales_modelo.php");



$animales = new Animales_model();

$arrayAnimales = $animales ->get_animales();

require_once("view/Animales_view.php");

?>