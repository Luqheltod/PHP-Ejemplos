
<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas , en este caso sera asociativo.

$planetas = array( "pequeño" =>" Mercurio" , "grande" =>"Venus" ,"mediano" =>"Tierra" );


//comprobamos si existe la clave con un if, usando la funcion array_key_exists)

if (array_key_exists("pequeño", $planetas)){
    
    echo "El planeta pequeño existe";
}

echo "<br>";

//estas funciones dan la primera y ultima clave, respectivamente
echo array_key_first($planetas) ;
echo array_key_last($planetas) ;




?>