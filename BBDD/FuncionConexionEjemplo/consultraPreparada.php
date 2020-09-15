<?php
//gsprogramacion.com

require "Conexion.php";

//nos conectamos como de costumbre
$conexion = Conexion::conectar();

//ahora en nuestra sentencia sql, vamos a usar un marcador
//los marcadores se denominan con :  , podemos usar varios.
//despues los sustituiremos por lo que queramos.

$sql = "SELECT * FROM JUGUETES WHERE NOMBRE = :nombre";

//ahora vamos a "preparar" nuestra sentencia sql

$resultado = $conexion->prepare($sql);

// una vez preparada, debemos pasarle los valores a nuestros marcadores.

$resultado->bindValue(":nombre","camion");

//ahora ejecutamos la sentencia preparada

$resultado->execute();

//si hacemos un fetch y un var_dump, vemos que efectivamente nos da los datos de la fila en la que el nombre es camion
$datos = $resultado->fetch(PDO::FETCH_ASSOC);

var_dump($datos);
?>