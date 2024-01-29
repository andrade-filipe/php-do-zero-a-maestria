<?php

$cincodias = strtotime("5 days");

echo $cincodias . "<br>";

$dataAtualMaisCinco = date("d/m/y", $cincodias);

echo $dataAtualMaisCinco . "<br>";

$doisMeses = strtotime("2 months");

echo $doisMeses . "<br>";

$dataAtualMaisDoisMeses = date('d/m/y', $doisMeses);

echo $dataAtualMaisDoisMeses;

?>