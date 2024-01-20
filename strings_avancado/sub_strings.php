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

?>