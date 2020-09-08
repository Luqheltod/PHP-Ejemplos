<?php
require_once "Conexion.php";

$conexion = Conexion::conectar();

$sql = "SELECT * FROM JUGUETES";

$resultado = $conexion->query($sql);

// tenemos nuestros resultados como anteriormente
while ($datos = $resultado->fetch(PDO::FETCH_ASSOC)) {
    
    // podemos meter en un nuevo array los que sean menor a 10 , y en otro el resto
    if ($datos["EDAD"] < 10) {
        $menor10[] = $datos;
    } else {
        $mayor10[] = $datos;
    }
}

//ahora que tenemos los datos en dos nuevos arrays , simplemente los recorremos.
//recordad que esto es un array bidimensional, tiene que ir un for dentro de un for.


echo "OBJETOS PARA MENORES DE 10 AÑOS <br>" ;

foreach ($menor10 as $array) {
    
    foreach ($array as $clave=> $valor) {
        
        echo $clave . " = " . $valor ."  " ;
    }
    
    echo "<br>";
}

echo "OBJETOS PARA MAYORES DE 10 AÑOS <br>" ;

foreach ($mayor10 as $array) {
    
    foreach ($array as $clave=> $valor) {
        
        echo $clave . " = " . $valor ."  " ;
    }
    
    echo "<br>";
}

?>