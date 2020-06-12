<?php


// gsprogramacion.com

// ejemplos de funciones con numeros.



// mt_rand()
echo "<br><br> mt_rand() <br>";

echo mt_rand(25, 50); // Generará un numero aleatorio entre 25 y 50 .




// max()

echo "<br><br> max() <br>";

$num1 = 15;
$num2 = 25;
echo max($num1, $num2); // devolvera el numero mayor entre los que le pasamos, en este caso 25 .



// min()

echo "<br><br> min() <br>";

echo min($num1, $num2); // devolvera el numero menor entre los que le pasamos, en este caso 15 .



// ceil()

echo "<br><br> ceil() <br>";

$numDecimal = 17.3;

echo ceil($numDecimal); // Devuelve el numero indicado redondeado hacia arriba, en este caso 18.



// floor()

echo "<br><br> floor() <br>";

echo ceil($numDecimal); // Devuelve el numero indicado redondeado hacia abajo, en este caso 17.



// round()

echo "<br><br> round() <br>";

echo round($numDecimal); // Devolvera 17, porque 17'3 esta mas cerca de 17 que de 18
echo "<br>";
$numRedondeado = round(17.23334, 3);

echo "Aqui comprobamos con round como redondeamos con 3 decimales el numero 17'23334" . " resultado de round(17.23334 ,3)" . " = " . $numRedondeado;



// pi()

echo "<br><br> pi() <br>";

echo pi();



// pow()

echo "<br><br> pow() <br>";

echo "dos eleveado al cubo" . " = " . pow(2, 3); // 2 elevado a 3. (dos al cubo)



// sqrt()

echo "<br><br> sqrt() <br>";

echo "raiz cuadrada de 9 " . "= " . sqrt(9);

?>