<?php

$arr = range(10,35,5);

print_r($arr);
echo "<br>";

$removed = array_splice($arr, 2,-2);

print_r($removed);
echo "<br>";

?>