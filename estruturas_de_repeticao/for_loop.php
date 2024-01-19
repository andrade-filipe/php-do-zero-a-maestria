<?php

for($i = 0; $i < 10; $i++){
    echo "$i <br>";
}

echo "<br>";

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for($i = 0; $i < count($arr); $i++){
    if($arr[$i] % 2 == 0){
        echo "$arr[$i] <br>";
    }
}

echo "<br>";

$arrGenerated = [];

for ($i = 0; $i <= 10; $i++){
    array_push($arrGenerated, $i);
}

print_r($arrGenerated);

?>
