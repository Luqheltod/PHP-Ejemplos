<?php

//declaramos las variables en blanco, sin asignarles un valor.
$nombre= $email =$genero =$web= $comentario =  "";


//como estamos en un ejemplo, no es necesario comprobar si se pulso el boton de enviar, pero en casos mas avanzados
//vamos a impedir que se entre en esta pagina si no se ha pulsado el boton

$nombre= $_GET["nombre"];  //asignamos los valores del $_GET a nuestras variables
$email = $_GET["email"];
$comentario=$_GET["comentario"];
$web = $_GET["web"];
$genero = $_GET["genero"];



//aqui simplemente vamos a mostrar esos datos que se introdujeron en el formulario.
echo "<h2> Tus Cosas: </h2>";

echo $nombre . '<br>';
echo $email . '<br>';
echo $comentario . '<br>';
echo $web . '<br>';
echo $genero . '<br>';

?>