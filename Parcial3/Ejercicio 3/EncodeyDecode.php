<?php
//Creamos la cadena
$Cadena = '{"Nombre": "Francisco","Edad": "21","Carrera": "Sistemas"}';
//Imprimimos la cadena
print "</b>--Json antes de codificar--</br>";
print "</b></br>";
var_dump($Cadena);

print "</b></br>";

//Utilizamos el json decode y modificamos la edad
print "<b>--Json decode--<br>";
print "</b></br>";
$jsonDecode = json_decode($Cadena);
$jsonDecode->Edad = "18";
echo 'Nombre : '.$jsonDecode->Nombre.'<br>';
echo 'Edad : '.$jsonDecode->Edad.'<br>';
echo 'Carrera : '.$jsonDecode->Carrera.'<br>';

print "</b></br>";

//Utilizamos el json encode 
print "<b>--Json encode--<br>";
$CadenaJson = json_encode($Cadena);

//Imprimimos el resultado
print "</b></br>";
var_dump ($CadenaJson);
?>