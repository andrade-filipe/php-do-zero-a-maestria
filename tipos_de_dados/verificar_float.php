<?php

    $floatNumber = 1.15;
    $floatString = "1.15";

    if(is_float($floatNumber)){
        echo "is float <br>";
    }

    if(!is_float($floatString)){ //negando
        echo "is not float <br>";
    }
?>
