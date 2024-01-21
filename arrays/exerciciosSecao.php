<?php
function encontrarPares($arr)
{
    $newArr = [];
    foreach ($arr as $value) {
        if ($value % 2 == 0) {
            array_push($newArr, $value);
        }
    }
    return $newArr;
}
?>

<?php

function maiorElemento($arr)
{
    sort($arr);
    return $arr[count($arr) - 1];
}

?>

<?php

function somaElementos($arr)
{
    return array_sum($arr);
}
?>

<?php

function ordenarNumeros($arr){
    sort($arr);
    return $arr;
}

?>