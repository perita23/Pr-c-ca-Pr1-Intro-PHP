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
echo "<hr>";
//--------------------------------------------//
echo "Actividad 5<br><br>";
$letters = "a,b,c,d,e,f";
$arrayLetters = array_reverse(explode(",", $letters), true);
foreach ($arrayLetters as $key => $value) {
    echo "letra".$key+1 .":".$value."<br>";
}
echo "<hr>";
//-------------------------------------------//
echo "Actividad 6<br><br>";
$notas = array("Miguel"=>5,"Luis"=>7,"Marta"=>10,"Isabel"=> 8,"Aitor"=>8,"Pepe"=>1);
asort($notas); /* Mantiene las keys del array asociativo*/
foreach (array_reverse($notas) as $key => $value) {
    echo"$key:".$value."<br>";
}
