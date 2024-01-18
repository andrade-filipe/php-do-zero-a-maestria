<?php

    $intNumber = 5;
    $stringNumber = "5";

    if(is_int($intNumber)){
        echo "É inteiro! <br>";
    }

    if(!is_int($stringNumber)){
        echo "Não é inteiro <br>";
    }
?>
