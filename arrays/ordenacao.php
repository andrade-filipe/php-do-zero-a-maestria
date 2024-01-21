<?php

$arr = [30,10,1,3,6,20,55,65,0,4,3,2,11];

sort($arr);

print_r($arr);
echo "<br>";

$arrReverse = [30,10,1,3,6,20,55,65,0,4,3,2,11];

rsort($arrReverse);
print_r($arrReverse);
echo "<br>";
echo "<br>";

$arrAssoc = ["a" => "elemento1", "zebra" => "animal", "chave" => "valor", "ordenacao" => "order"];

asort($arrAssoc); //por valor
print_r($arrAssoc);
echo "<br>";

print_r($arrAssoc); //por valor reverso
echo "<br>";
echo "<br>";

ksort($arrAssoc); //por chave
print_r($arrAssoc);
echo "<br>";

krsort($arrAssoc); //por chave reverso
print_r($arrAssoc);
echo "<br>";
echo "<br>";


shuffle($arr); //aleatorio
print_r($arr);
echo "<br>";
?>