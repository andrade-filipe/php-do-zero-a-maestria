<?php

$pessoa = ["Matheus", 29, "Programador"];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";

?>