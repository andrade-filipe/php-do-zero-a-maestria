<?php

$carro = [
    "marca" => "BMW",
    "motor" => 2.4,
    "teto_solar" => true,
    "cambio" => "Manual",
    "portas" => 4,
];

extract($carro);

echo "$marca <br>";
echo "$motor <br>";
echo "$cambio <br>";

?>