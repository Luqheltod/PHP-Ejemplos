<?php



$x = 3 ;
$y = $x +5;
echo "Nuestra variable antes del include = " . $y;   //la variable $y vale 8, el resultado de sumar 5 mas 3.
echo "<br>";
include("PRUEBOTAS.php");  //codigo que incluimos en este momento   . Este codigo lo unico que tiene es $x=17.
//es como si lo hubiesemos escrito en esta misma linea.



$y = $x +5;

echo "Nuestra variable tras el include = " . $y;  // no mostrara 8, ya que actualmente debido al include nuestra x vale 17. Por lo tanto muestra 17+5=22
?>