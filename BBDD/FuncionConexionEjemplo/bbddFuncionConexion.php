<?php
//gsprogramacion.com
//debemos incluir nuestra clase conexion.php
require_once "Conexion.php";

//llamamos a la funcion static conectar de la clase Conexion 
$conexion = Conexion::conectar();
//ya tenemos en nuestra variable $conexion el objeto PDO conectado a nuestra BBDD

$sql = "SELECT * FROM JUGUETES";

$resultado = $conexion->query($sql);

while( $datos = $resultado->fetch(PDO::FETCH_NUM)) {
    
    echo "ID = " . $datos[0] . " NOMBRE = " . $datos[1] . " EDAD = " . $datos[2]
    . " PRECIO = " . $datos[3] . " PESO = " . $datos[4];
    echo "<br>";
}

?>