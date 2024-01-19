<?php

function verificarAcesso($idade, $possuiAutorizacao){
    if($idade < 18){
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else if($idade >= 18 && $possuiAutorizacao){
        return "Acesso autorizado";
    } else if($idade >= 18 && !$possuiAutorizacao){
        return "Acesso negado. Autorização necessária";
    }
}
