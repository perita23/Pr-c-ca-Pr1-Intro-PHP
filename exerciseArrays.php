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
//---------------------------------------------//
echo "Actividad 5<br><br>";
$letters = "a,b,c,d,e,f";
$arrayLetters = array_reverse(explode(",", $letters), true);
foreach ($arrayLetters as $key => $value) {
    echo "letra".$key+1 .":".$value."<br>";
}
echo "<hr>";
//-------------------------------------------//
echo "Actividad 6<br><br>";
$notas = array("Miguel"=>5,"Luis"=>7,"Marta"=>10,"Isabel"=> 8,"Aitor"=>4,"Pepe"=>1);
asort($notas); /* Mantiene las keys del array asociativo*/
foreach (array_reverse($notas) as $key => $value) {
    echo"$key:".$value."<br>";
}
echo "<hr>";
//-------------------------------------------//
echo "Actividad 7<br><br>";
$mediaNotas = null;
foreach ($notas as $key => $value) {
    $mediaNotas = $mediaNotas + $value;
}
$mediaNotas = round($mediaNotas/count($notas),2);
echo "Media de notas: ".$mediaNotas."<br>";
echo "Alumnos por encima de la media:<br>";
foreach ($notas as $key => $value) {
    if ($value > $mediaNotas ){
        echo "-".$key."<br>";
    }
}
echo "<hr>";
//-------------------------------------------//
echo "Actividad 8<br><br>";
asort($notas); /* Mantiene las keys del array asociativo*/
foreach (array_reverse($notas) as $key => $value) {
    echo"La nota mas alta es $value y el mejor alumno es $key<br>";
    break;
}