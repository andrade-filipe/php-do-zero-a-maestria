<?php

$arr = [5, "Filipe", "João", true, false, 1.8, "Carlos", "Viviane"];

$arrLength = count($arr);
$index = 0;

while($index < $arrLength){

    if(is_string($arr[$index])){
        echo "$arr[$index] <br>";
    }

    $index++;
}

?>
