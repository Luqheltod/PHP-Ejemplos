<?php

require_once "Conexion.php";



$conexion = Conexion::conectar();

$sql = "SELECT * FROM JUGUETES";

$resultado = $conexion->query($sql);

while( $datos = $resultado->fetch(PDO::FETCH_NUM)) {
    
    echo "ID = " . $datos[0] . " NOMBRE = " . $datos[1] . " EDAD = " . $datos[2]
    . " PRECIO = " . $datos[3] . " PESO = " . $datos[4];
    echo "<br>";
}

?>