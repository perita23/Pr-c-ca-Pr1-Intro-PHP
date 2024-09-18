<?php

$num1 = rand(1, 10);
$num2 = rand(1, 10);
echo "<hr>";
echo "Sumar,restar y dividir dos numeros";
echo "Numero 1 =" . $num1;
echo "Numero 2 = " . $num2 . "<br>";

echo "SUMA = " . $num1 + $num2;
echo "RESTA = " . $num1 - $num2;
echo "DIVIDIR" . $num1 / $num2;
echo "<hr>";
//------------------------------------------------//

if ($num1 > $num2) {
    echo "El numero 1  es mayor que el numero 2";
} elseif ($num2 > $num1) {
    echo "El numero 2  es mayor que el numero 1";
} else {
    echo "Ambos numeros tienen el mismo valor";
}

//------------------------------------------------//
if ($num1 % $num2 > 1) {
    
}
