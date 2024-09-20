<?php
$num=1;
$asocArray = array("nombre"=>"Sara","apellido"=>"Martinez","edad"=>"23","ciudad"=>"Barcelona");
foreach ($asocArray as $key => $value) {
    echo "dato $num ->".$asocArray[$key] = $value."<br>";
    $num++;
}