<?php

$str = "o rato roeu a roupa do rei de roma";
$i = 0;
$count = 0;

while($i < strlen($str)){
    if($str[$i] == "a"){
        $count++;
    }
    $i++;
}

echo "$count";
?>