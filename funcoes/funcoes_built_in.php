<?php

    echo strtoupper("Testando Função");

    echo "<br>";

    $arr = ["João", "Filipe", "Matheus"];

    $impl = implode(",", $arr);

    echo $impl;

    // func_get_args -> retorna um array com os argumentos passados numa função
    // func_num_args -> retorna o numero de argumentos de uma função
?>