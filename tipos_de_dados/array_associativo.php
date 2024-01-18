<?php

$arr = ['nome' => 'Bob', 'patas' => 4, 'cor' => 'Branco'];

echo $arr['cor'];
echo "<br>";
print_r($arr);
echo "<br>";
echo "<br>";

//exercicio 6

$carros = [
    'modelo' => 'Corolla',
    'montadora' => 'Toyota',
    'ano' => 2023,
    'kilometragem' => 30000,
];

echo $carros['ano'];
echo "<br>";
echo $carros['kilometragem'];
echo "<br>";
print_r($carros);
echo "<br>";
echo "<br>";

//exercicio 7

$pessoa = [
    'nome' => 'Filipe',
    'idade' => 21,
    'peso' => 89,
    'estado_civil' => 'casado com sarah',
];

$maioridade_por_lei = 18;

if ($pessoa['idade'] >= $maioridade_por_lei) {
    echo "é de maior por lei <br>";
}
?>
