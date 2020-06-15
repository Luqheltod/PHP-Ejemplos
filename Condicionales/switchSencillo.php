<?php


//gsprogramacion.com


$dia =  date("D");  //Esta funcion, que ya vimos anteriormente, devuelve el dia con las tres primeras letras en ingles.

switch ($dia){  //bloque switch, entre parentesis , la condicion a evaluar. Abrimos llave
    
    case "Mon":    //ejecutaremos en cada caso, el trozo de codigo que haya dentro del case si la condicion se cumple. Observad que se usan los dos puntos en lugar de las llaves
        
        echo "Lunes";
        break;   //Esta sentencia hace que el bucle pare de ejecutarse si ha entrado en un caso, de no ser asi, se ejecutarian todas las demas.
        
    case "Tue":
        
        echo "Martes";
        break;
        
    case "Wed":
        
        echo "Miercoles";
        break;
        
    case "Thu":
        
        echo "Jueves";
        break;
        
    case "Fri":
        
        echo "Viernes";
        break;
        
    case "Sat":
        
        echo "Sabado";
        break;
        
    case "Sun":
        
        echo "Domingo";
        break;
        
        
        
}//cerramos llave



?>