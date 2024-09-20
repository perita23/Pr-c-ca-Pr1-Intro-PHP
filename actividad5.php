<?php
$value= 0;
$countEven = 0;
$countOdd = 0;
do {
    $num = rand(0,20);
    if ($num %2 == 0) {
        $countEven++;
    }else {
        $countOdd++;
    }
    echo "El valor del numero es = ".$num;
    echo "<br>";
    $value = $value+$num;
    echo "El valor actual de la suma de numeros es =".$value;
    echo "<br><hr>";
} while ($value <= 100);
echo "<br><br><br>";
echo "El total de numero pares es --> ".$countEven."<br>";
echo "El total de numero impares es --> ".$countOdd;