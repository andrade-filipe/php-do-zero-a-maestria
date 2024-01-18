<?php

$teste = "asd";

echo "$teste global 1 <br>";

if(true){
    $teste = "dsa";

    echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function testandoGlobal(){
    global $teste;

    $teste = "ksksks";

    echo "$teste global funtion <br>";
}

testandoGlobal();
echo "$teste after testandoGlobal"
?>
