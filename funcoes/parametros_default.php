<?php

function parametroDefault($default = "teste"){

    echo "$default <br>";
}

parametroDefault();
parametroDefault("mude o valor");


function parametroDefault2($outroParam, $default = "teste"){ //boa prática: defaults no final

    echo "$outroParam / $default <br>";
}

parametroDefault2("Filipe");
parametroDefault2("Filipe", "é Lindo");
?>