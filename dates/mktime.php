<?php

$dataNascimento = mktime(02,12,33,02,05,1999);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/y', $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

?>