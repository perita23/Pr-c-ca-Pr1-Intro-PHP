<?php

$num1 = rand(0, 10);
$num2 = rand(0, 10);
echo "Sumar,restar y dividir dos numeros:";
echo "<br>Numero 1 =" . $num1. "<br>";
echo "Numero 2 = " . $num2 . "<br>";
echo "<br>";
echo "SUMA = " . $num1 + $num2. "<br>";
echo "RESTA = " . $num1 - $num2. "<br>";
if ($num1 == 0 | $num2 == 0) {
    echo "Uno de los dos numero es 0, no se puede dividir entre 0";
}else{
    echo "DIVIDIR = " . $num1 / $num2;
}
echo "<hr>";
//------------------------------------------------//

if ($num1 > $num2) {
    echo "El numero 1  es mayor que el numero 2<br>";
} elseif ($num2 > $num1) {
    echo "El numero 2  es mayor que el numero 1<br>";
} else {
    echo "Ambos numeros tienen el mismo valor, el resultado es 0<br>";
}

//------------------------------------------------//
if ($num1 & $num2 > 0) {
    echo "Area del triangulo = ".$num1*$num2/2;
} else{
    echo "No se puede divir entre 0";
}
