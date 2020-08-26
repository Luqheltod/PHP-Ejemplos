
<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas.

$planetas = array("Mercurio" , "Venus", "Tierra" ,"Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

//eliminamos Mercurio y venus. (¿por que eliminamos mercurio y venus?, en el primer parametro le estamos pasando un 0
// es decir, en base al elemento 0 del array va a eliminar dos valores, es decir, mercurio y venus. 
//despues como tercer parametro le pasamos un array,que en este caso contiene un unico string. 
array_splice($planetas, 0, 2, array("planeta que sustituye a mercurio y venus"));

//en el siguiente var_dump observamos el resultado.
var_dump($planetas);

?>