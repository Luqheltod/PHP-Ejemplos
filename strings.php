<?php

// ejemplos de funciones con strings. Ejecutar el codigo y comparar el resultado examinando a la vez el codigo para entender mejor.



// str_len
echo "str_len() <br>";

$risa = "jiji la risita";
echo strlen($risa);      //devuelve 14, la cantidad de letras de la cadena "jiji la risita"
echo "<br>";
echo strlen("jaja la risa"); // como veis tambien puede contar los caracteres de una cadena que se introduce directamente.
echo "<br>";




// str_word_count

echo " <br> str_word_count()";
$cadena1 = "Cuentame las palabras PHP!";
echo "<br>" . str_word_count($cadena1);   //devuelve 4, cantidad de palabras separadas por espacio en blanco

// strpos

echo "<br><br> strpos()";

echo "<br>" . "Tenemos el string 'Hola Mundo'";

$saludo = "Hola Mundo";

echo "<br>" . "Ejecutamos strpos('nuestra cadena', 'Mundo') y nos devuelve ";

echo strpos($saludo, "Mundo"); // cabe señalar que nos devuelve 5 porque empieza a contar desde 0, en este caso H-0 o-1 l-2 a-3 espacio-4 M-5

// substr()

echo "<br><br> substr()";

echo "<br>" . substr("Hola mundo", 2, 4); // devolvera "la m", Empezara en el 2 y recorrerá 4.  por supuesto en vez de "Hola mundo" puedes poner una variable $cualquierstring

echo "<br>" . substr("Hola Mundo", -3); // devolver ndo, ya que son las ultimas 3


//strcmp() & strcasecmp()

echo "<br><br> strcmp() & strcasecmp()";

$cad1 = "Hola mundo";
$cad2 = "HOLA MUNDO";

echo strcmp($cad1, $cad2); //devuelve 1 ya que son iguales salvo por las mayusculas.
echo "<br>";
echo strcasecmp($cad1, $cad2); //devuelve 0 ya que tiene en cuenta las mayusculas.




//minusculas y MAYUSCULAS
echo "<br><br>Minusculas y mayusculas";
$cadena = "hola mundillo";

echo "<br>" . strtoupper($cadena); // devolvera HOLA MUNDILLO

echo "<br>" . strtolower($cadena); // devolvera hola mundillo, si hubiese cualquier letra en mayuscula la pasaria a minuscula

echo "<br>" . ucfirst($cadena); // devolvera Hola mundillo

echo "<br>" . ucwords($cadena); // devolvera Hola Mundillo




// str_shuffle

echo "<br><br> str_shuffle()" . "<br>";

$cadenaEjemplo = "Tenemos que aprender a programar robots para que programen robots que programen";

str_shuffle($cadenaEjemplo); // hemos usado la funcion, pero ni la mostramos ni le damos ninguna utilidad.

echo "<br>" . $cadenaEjemplo; // aqui comprobamos que la variable $cadenaEjemplo sigue sin alterar, el cambio solo se aplica momentanemante
// sin embargo podriamos almacenar el resultado en otra variable $cadenaDesordenada= str_shuffle($cadenaEjemplo);
echo "<br>" . "Desordenada = " . str_shuffle($cadenaEjemplo);

// str_rev

echo "<br><br> strrev()" . "<br>";

echo strrev("Hola Mundo");

?> 