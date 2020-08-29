<?php




//tenemos la misma funcion que en el ejemplo anterior
function sumaYdivide($parametro, $parametro2){
    
    
    $resultado = ($parametro+$parametro2)/3;
    
    //pero en este caso no lo vamos a imprimir, si no que la funcion va a devolver el valor
    
    return $resultado;
}




$resultado1= sumaYdivide(10, 20); //en resultado1 tenemos almacenado  10, ya que 30/3 es 10.




$numero1 = 50;

$numero2 = 10;

$resultado2 = sumaYdivide($numero1, $numero2); //en resultado2 tenemos almacenado 20, ya que 60/3 es 20.



//ahora estos mismos valores, los usaremos de nuevo en la funcion

$resultado3 = sumaYdivide($resultado1, $resultado2);

//vamos a mostrar $resultado3 unicamente, seguro que podeis adivinar cual es el resultado

echo $resultado3;

?>