<?php

function compararNumeros($numero1, $numero2){
    if($numero1 == $numero2){
        return "Os números são iguais.";
    } else if ($numero1 > $numero2){
        return "O primeiro número é maior.";
    } else if ($numero2 > $numero1){
        return "O segundo número é maior.";
    }
}
