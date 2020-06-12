<?php

//gsprogrmacion.com


$numeraco = 214748364 ;

echo "Este es el numeraco y es " . gettype($numeraco);  //aqui podemos ver que devuelve integer.

echo "<br>";

$numeraco = $numeraco +10000000000000000000; //le sumamos un numera consistentemente grande al numeraco

echo "Este es el numeraco y es " . gettype($numeraco); // ahora podemos observar que devuelve double. La conversion es automatica



?>