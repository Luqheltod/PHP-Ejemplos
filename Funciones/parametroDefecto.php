<?php





function juegoDeportes($deporte0, $deporte1 = "futbol", $deporte2="tenis"){
    
    
    echo "Yo juego al $deporte0 , $deporte1 y al $deporte2";
}


//ejecutamos la funcion pasandole un argumento
juegoDeportes("Beisbol");


echo "<br>";

//ejecutamos la funcion pasandole dos argumentos
juegoDeportes("Baloncesto","Waterpolo");



// juegoDeportes(); daria error, ya que uno de los parametros no tiene valor.
?>