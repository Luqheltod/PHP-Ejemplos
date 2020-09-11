<?php

require_once "Conexion.php";

$conexion = Conexion::conectar();


// este tipo de comillas se consiguen con alt+96 ``
$sql = "INSERT INTO `juguetes` (`ID`, `NOMBRE`, `EDAD`, `PRECIO`, `PESO(GR)`) VALUES (NULL, 'cualquiera', '3', '3', '3');";


$conexion->exec($sql);


?>