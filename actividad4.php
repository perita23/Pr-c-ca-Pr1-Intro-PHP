<?php
$dado = rand(1, 6);
$numberText = array("Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis");
echo "El numero del dado es: " . $dado . "<br>";
$opuesto = 7 - $dado;
echo "La cara opuesta vale : " . $opuesto . " --> " . $numberText[$opuesto - 1];
