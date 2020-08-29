<?php



/* nuestra funcion quiere sumar dos numeros y dividir el resultado entre 3
 * por lo tanto le tendremos que pasar dos variables o parametros ( los dos numeros).
 */


function sumaYdivide($parametro, $parametro2){
    
    //dentro de la funcion asignamos a la variable resultado el valor de sumar los dos numeros y dividirlos entre 3.
    $resultado = ($parametro+$parametro2)/3;
    
    //aqui tenemos ya nuestro resultado, en este caso vamos a mostrarlo por pantalla
    echo $resultado . "<br>";
}


//ahora vamos a llamar a la funcion de distintas maneras

//primero proporcionando dos numeros nosotros :

sumaYdivide(10, 20); //nos muestra 10, ya que 30/3 es 10.


//ahora vamos a declarar dos variables, y le pasaremos las mismas a la funcion :

$numero1 = 50;

$numero2 = 10;

sumaYdivide($numero1, $numero2); //nos muestra 20, ya que 60/3 es 20.



?>