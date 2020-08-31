<?php

//aqui tambien abrimos sesion 

session_start();

echo "Ola señor " . $_POST["nombre"] . " " . $_SESSION["ejemplo"] ;


?>