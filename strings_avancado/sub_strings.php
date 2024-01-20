<?php

$string = "String muito legal";

$muito = substr($string, 7, 5);
echo "$muito <br>";

$restoDaString = substr($string, 7);
echo "$restoDaString <br>";

$negativo= substr($string, 7, -3);
echo "$negativo <br>";

$inverter = strrev($string);
echo "$inverter <br>";

echo str_repeat($string, 5);
echo "<br>";

$arr = explode(" ",$string);
print_r($arr);
echo "<br>";

echo implode(",",$arr);
echo "<br>";

$testeStrPos = strpos($string, $muito);
echo $testeStrPos;
echo "<br>";

//strrpos() encontra o ultimo indice ao invés do primeiro.

$extrairSemSaberIndice = substr($string, strpos($string, "legal"), 5);

echo $extrairSemSaberIndice;
echo "<br>";

$restoDaString2 = strstr($string, "muito");

echo $restoDaString2
?>