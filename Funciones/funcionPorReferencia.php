<?php



$numero1 = 2;

echo $numero1;

function duplicarValor(&$valor){
    
    $valor =  $valor*2;
    
}

duplicarValor($numero1);
duplicarValor($numero1);
echo $numero1;   //lo hemos multiplicado por dos y luego nuevamente por 2, asi que nos muestra 8. Y como veis , es la misma variable.

?>