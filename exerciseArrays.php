<?php
echo "Actividad 1<br><br>";
$num=1;
$asocArray = array("nombre"=>"Sara","apellido"=>"Martinez","edad"=>23,"ciudad"=>"Barcelona");
foreach ($asocArray as $key => $value) {
    echo "dato $num ->".$asocArray[$key] = $value."<br>";
    $num++;
}
echo "<hr>";
//---------------------------------------------//
echo "Actividad 2<br><br>";
foreach ($asocArray as $key => $value) {
    echo "$key:$value";
}
echo "<hr>";
//---------------------------------------------//
echo "Actividad 3<br><br>";
$num=1;
$asocArray = array("nombre"=>"Sara","apellido"=>"Martinez","edad"=>"23","ciudad"=>"Barcelona");
$asocArray["edad"]=24;
foreach ($asocArray as $key => $value) {
    echo "dato $num ->".$asocArray[$key] = $value."<br>";
    $num++;
}
echo "<hr>";
//---------------------------------------------//
echo "Actividad 4<br><br>";
unset($asocArray["ciudad"]);
var_dump($asocArray);

