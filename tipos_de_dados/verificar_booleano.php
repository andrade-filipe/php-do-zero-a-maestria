<?php

$checkThis = 5> 2;

if(is_bool($checkThis)){
    echo "valor é booleano <br>";
}

if(is_bool(false)){
    echo "valor false é boolean <br>";
}

if(0 == false){
    echo "valor 0 é considerado falso <br>";
}
?>
