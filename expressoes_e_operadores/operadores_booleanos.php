<?php
//igual e diferente
if(3 == 3){
    echo "3 == 3 <br>";
}

if(3 != 4){
    echo "3 != 4 <br>";
}

echo "<br>";

$a = 6;
$b = 4;
$c = 6;

if($a == $b){
    echo "A igual B <br>";
}

if($a == $c){
    echo "A igual C <br>";
}

echo "<br>";

// identico a e não identico a

if(3 === 3){
    echo "3 === 3 <br>";
}

if(3 !== "3"){
    echo "3 !== 3 <br>";
}

echo "<br>";

$x = 5;
$y = 3;

if($x == $y){
    echo "5 == 3 <br>";
}
if($x != $y){
    echo "5 != 3 <br>";
}
if($x === $y){
    echo "5 === 3 <br>";
}
if($x !== $y){
    echo "5 !== 3 <br>";
}

?>
