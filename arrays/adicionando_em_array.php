<?php

    $arr = [];

    print_r($arr);
    echo "<br>";

    $arr[0] = 10;

    print_r($arr);
    echo "<br>";

    $arr[1] = 15;

    print_r($arr);
    echo "<br>";

    //update em valor do array
    $arr[1] += 50;

    print_r($arr);
    echo "<br>";

    $arr[] = "adicionado ao fim";
    print_r($arr);
    echo "<br>";

    $arrAssociativo = [];

    $arrAssociativo["carro"] = "BMW";

    print_r($arrAssociativo);
    echo "<br>";

    $arrAssociativo["aviao"] = "Boeing 707";

    print_r($arrAssociativo);
    echo "<br>";
?>