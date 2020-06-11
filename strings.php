<?php


//ejemplos de funciones con strings. Ejecutar el codigo y comparar el resultado examinando a la vez el codigo para entender mejor.


//str_len

echo "str_len() <br>";

$risa = "jiji la risita";
echo "<br>";
echo strlen("jaja la risa"); //como veis tambien puede contar los caracteres de una cadena que se introduce directamente.
echo "<br>";


//str_word_count

echo " <br> str_word_count";
$cadena1 = "Cuentame las palabras PHP!";
echo "<br>" . str_word_count($cadena1);




//strpos

echo "<br><br> strpos";




//str_shuffle

echo "<br><br> str_shuffle()" . "<br>";

$cadenaEjemplo = "Tenemos que aprender a programar robots para que programen robots que programen";

str_shuffle($cadenaEjemplo);  //hemos usado la funcion, pero ni la mostramos ni le damos ninguna utilidad.

echo "<br>" . $cadenaEjemplo;   // aqui comprobamos que la variable $cadenaEjemplo sigue sin alterar, el cambio solo se aplica momentanemante
// sin embargo podriamos almacenar el resultado en otra variable $cadenaDesordenada= str_shuffle($cadenaEjemplo);
echo "<br>" . "Desordenada = " . str_shuffle($cadenaEjemplo);


//str_rev

echo "<br><br> strrev()" . "<br>";

echo strrev("Hola Mundo");

?> 