<?php

//gsprogramacion
require_once "Conexion.php";

$conexion = Conexion::conectar();


// este tipo de comillas se consiguen con alt+96 ``
$sql = "INSERT INTO `juguetes` (`ID`, `NOMBRE`, `EDAD`, `PRECIO`, `PESO`) VALUES (NULL, 'cualquiera', '3', '3', '3');";

//exec nos sirve para ejecutar INSERT, devuelve las filas afectadas.
$filasAfectadas = $conexion->exec($sql);

var_dump($filasAfectadas);
?>