<?php
//gsprogramacion.com

try{
    
    $conexion = new PDO("mysql:host=localhost; dbname=gsprogramacion" , "root","" );
    
    // establecemos el tipo de errores que vamos a obtener:
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // establecemos el charset , para las eñes tildes etc
    $conexion->exec("SET CHARACTER SET utf8");
    
}catch (Exception $e) {
    
    // los mensajes de error que obtendremos y ademas la linea en la que se produce.
    die("Error" . $e->getMessage());
    echo "Linea del error " . $e->getLine();
}

//a partir de aqui el codigo seguiria igual
$sql = "SELECT * FROM JUGUETES";

$resultado = $conexion->query($sql);

while( $datos = $resultado->fetch(PDO::FETCH_ASSOC)) {
    
    echo "ID = " . $datos["ID"] . " NOMBRE = " . $datos["NOMBRE"] . " EDAD = " . $datos["EDAD"]
    . " PRECIO = " . $datos["PRECIO"] . " PESO = " . $datos["PESO"];
    echo "<br>";
}



?>