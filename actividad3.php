<?php
$num1 = rand(10, 20);
$num2 = rand(10, 20);
//---------------------------------------//
echo "<h2>For</h2>";
echo "Numero1 = " . $num1 . "<br>";
echo "Numero2 = " . $num2 . "<br>";
for ($i = 0; $i < $num1; $i++) {
    if ($i % 2 == 0 | $i == 0) {
        echo $i . " | ";
    }
}
echo "<hr>";

//--------------------------------------//
echo "<h2>While</h2>";
echo "Numero1 = " . $num1 . "<br>";
echo "Numero2 = " . $num2."<br>";
$b = 0;
while ($b < $num2) {
    echo $b." | ";
    $b++;
}
echo "<hr>";


//-------------------------------------//
echo "<h2>Do/While</h2>";
echo "Numero1 = " . $num1."<br>";
echo "Numero2 = " . $num2."<br>";
$a = $num1;
do {
    echo $a." | ";
} while ($a++ < $num2);
// echo "El segundo numero es menor que el primero!";
// echo $num1;
