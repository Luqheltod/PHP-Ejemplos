<?php
//gsprogramacion.com

//creamos la cookie, con el nombre de la misma,  el valor, y el tiempo .
//si no especificamos el tiempo la cookie se elimina cuando cerramos el navegador
$valor = "primera cookie";
setcookie("prueba", $valor, time()+15 , "/"); //con el ultimo parametro de "/" le decimos que este disponible en todo el sitio.
// ahi se puede especificar la ruta o el directorio donde va a estar disponible .

echo $_COOKIE["prueba"];


?>




