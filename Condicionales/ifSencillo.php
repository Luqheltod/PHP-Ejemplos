<?php

//gsprogramacion.com

$variableCondicion = 15;  //la variable con  valor 15



//Se declara el IF, entre parentesis la condicion que queremos que se cumpla. A continuacion se abre la llave del if, el codigo que
//debe ejecutarse si la condicion se cumple, y se cierra la llave. 

if($variableCondicion > 15) {   //Si la variable es mayor a 15, se ejecutara lo siguiente. En este caso no lo es.
    
    
    echo "Esto no se va a ejecutar";
}


if($variableCondicion<15){   //Si la variable es menor a 15, se ejecutara lo siguiente. En este caso tampoco lo es.
    
    echo "Esto tampoco se va a ejecutar";
}


if($variableCondicion ==15 ){  //Si la variable es igual a 15, se ejeutara la siguiente. En este caso se cumple la condicion, por lo tanto se ejecutara el codigo.
    
    echo "Finalmente se ejecutará esto" ;
}
?>