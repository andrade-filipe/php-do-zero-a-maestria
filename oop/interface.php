<?php

interface Caracteristicas {
    public function falar();
}

class Humano implements Caracteristicas{

    public function falar(){
        echo "HUMANOSSSSS!!!";
    }
}

$objeto = new Humano;

echo $objeto->falar();

?>