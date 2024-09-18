<?php
$num1= rand(10,20);
$num2= rand(10,20);
//---------------------------------------//
echo"Numero1 = ".$num1;

echo "Progresión con bucle FOR:";
for ($i = 0; $i < $num1; $i++) {
    if ($i / 2  | $i == 0) {
        echo $i;
    }
}
echo "<hr>";

//--------------------------------------//
echo"Numero2 = ".$num2;
while ($i < $num2) {
    echo $i;
}
echo "<hr>";


//-------------------------------------//
$a = $num1;
if ($num2 < $num1) {
    do {
        echo $a ;
        $a++ ;
    } while ($a < $num2);
}else{
    echo "El segundo numero es menor que el primero!";
    echo $num1;
}