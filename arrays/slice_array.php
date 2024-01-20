<?php

$arr = range(0,25);
$slice = array_slice($arr, 0, 10);

print_r($slice);
echo "<br>";
echo "<br>";

$slice = array_slice($arr, 10);

print_r($slice);
echo "<br>";
echo "<br>";

$slice = array_slice($arr, 10, -5);

print_r($slice);
echo "<br>";
echo "<br>";

$chunk = array_chunk($arr, 5);

print_r($chunk);
echo "<br>";
echo "<br>";
?>