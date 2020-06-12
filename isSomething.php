<?php

// gsprogramacion

// variables para comprobar.
$unString = "string para comprobar";
$unInteger = 24;
$unDouble = 23.15;
$unBoolean = true;
$variableNula = NULL;

is_bool($unBoolean); // devolvera true, osea 1.
is_bool($unString); // devolvera false, osea 0.
is_numeric($unInteger); // devolvera true, osea 1 . Muy iportante señalar que esta funcion tambien devolverá 1 si le pasamos un string numerico, por ejemplo "33" o un double (33.15).
is_numeric($unString); // devolvera false, osea 0.
is_float($unDouble); // devolvera true, osea 1.
is_float($unInteger); // devolvera false, osea 0.
is_int($unInteger); // devolvera true, osea 1.
is_int($unDouble); // devolvera false, osea 0.
is_string($unString); // devolvera true, osea 1.
is_string($unInteger); // devolvera false, osea 0.
is_null($variableNula); // devolvera true, osea 1.
is_null($unBoolean); // devolvera false, osea 0.
isset($unDouble); // devolvera true, osea 1.
isset($variableInventada); // devolvera false, osea 0.

?>