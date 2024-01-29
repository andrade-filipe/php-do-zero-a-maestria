<?php

$data = new DateTime();

print_r($data);
echo "<br>";
echo "<br>";

echo $data->format('d/m/y');
echo "<br>";
echo "<br>";

echo $data->format('D - M - Y');
echo "<br>";
echo "<br>";

echo $data->format('l - F - Y');
echo "<br>";
echo "<br>";

$data->modify('+5 days');

echo $data->format('d/m/Y');
echo "<br>";
echo "<br>";

$data->setDate(1999,12,01);
print_r($data);
echo "<br>";
echo "<br>";

$data->setTime(05,12,10);
print_r($data);
echo "<br>";
echo "<br>";

$dataUm = new DateTime();
$dataDois = new DateTime();

$dataUm->setDate(2001,10,15);

$diff = $dataUm->diff($dataDois);
print_r($diff);
echo "<br>";
echo "<br>";

echo $diff->format("%a days");
echo "<br>";
echo "<br>";

if($dataUm > $dataDois){
    echo "data um é maior" . "<br>";
}

if($dataUm < $dataDois){
    echo "data dois é maior" . "<br>";
}

// == com datas não funciona por conta do tempo de
// execução do código
// para usar == com datas utilizar setDate E setTime;
?>