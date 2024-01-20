<?php

$strLower = "caixa baixa";

$strUpper = "CAIXA ALTA";

echo strtoupper($strLower);
echo "<br>";
echo strtolower($strUpper);
echo "<br>";

$frase = "testando case da primeira letra";

echo ucfirst($frase);
echo "<br>";

$frase2 = "todas as palavras começando com maiuscula";

echo ucwords($frase2);
echo "<br>";

?>