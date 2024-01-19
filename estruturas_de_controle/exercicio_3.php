<?php

function calcularDesconto($valor, $categoria){
    switch($categoria){
        case "eletrônicos":
            return $valor * 0.9;
            break;
        case "vestuário":
            return $valor * 0.8;
            break;
        case "alimentos":
            return $valor * 0.95;
            break;
        default:
            return $valor;
    }
}
