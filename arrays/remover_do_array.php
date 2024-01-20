<?php

$arr = range(10,35,5);
print_r($arr);
echo "<br>";
echo "<br>";

/**
 * remove todos os elementos a partir de index 1 até 3.
 * ou seja, remove os elementos 1,2 e 3 do array de 0 a 6
 */
$removed = array_splice($arr, 1,3);

print_r($arr);
echo "<br>";
print_r($removed);
echo "<br>";
echo "<br>";

/**
 * remove todos os elementos a partir de index 1 até o tamanho do array -3 casas.
 * ou seja, remove os elementos 1 e 2 do array de 0 a 6
 */
$arr2 = range(10,35,5);

$removed2 = array_splice($arr2, 1,-3);

print_r($arr2);
echo "<br>";
print_r($removed2);
echo "<br>";
echo "<br>";

/**
 * remove todos os elementos a partir de index 1 e adiciona no outro array
 */
$arr3 = range(10,35,5);

$removed3 = array_splice($arr3, 1);

print_r($arr3);
echo "<br>";
print_r($removed3);
echo "<br>";
echo "<br>";

?>