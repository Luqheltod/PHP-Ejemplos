<?php




require_once 'utilidades.php';



$arrayBusqueda = Utilidades::busquedaSinPrecio("","Corre");



    
$arrayPaises = Utilidades::obtenerPaises();

var_dump($arrayPaises);
echo $arrayPaises[0][0];


?>