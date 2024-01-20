<?php

$filipe = [
    "nome" => "Filipe",
    "idade" => 29,
    "profissao" => "programador",
];

$matheus = [
    "nome" => "Matheus",
    "idade" => 18,
    "profissao" => "engenheiro",
];

foreach($filipe as $caracteristica => $valor){
    echo "$caracteristica => $valor <br>";
}

echo "<br>";

foreach($matheus as $caracteristica => $valor){
    echo "$caracteristica => $valor <br>";
}

?>