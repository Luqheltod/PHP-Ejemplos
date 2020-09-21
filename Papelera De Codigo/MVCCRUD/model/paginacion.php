<?php

require_once 'Conexion.php';
//PAGINACION
//si nos ha llegado mediante get un numerito es que ha pulsado en uno de los numeros para paginar. Si no mostramos la pagina 1.

if(isset($_GET["numero"])){
    $pagina = $_GET["numero"];
} else{
    $pagina = 1;
}

$conexion = Conexion::conectar();

$sql = "SELECT *FROM ANIMAL";
$resultado = $conexion->prepare($sql);

$resultado ->execute(array());

//este es el numero de registros/filas que salen.
$num_filas = $resultado->rowCount();
//numero de registros que vamos a mostrar por pagina
$registros_paginas = 2;



//asi pues si divido el numero de registros entre los registros que quiero por pagina, nos da el numero de paginas que necesito

$total_paginas = ceil($num_filas/$registros_paginas);  // lo redondeamos hacia arriba



$empezar_desde =($pagina-1)*$registros_paginas; 

?>