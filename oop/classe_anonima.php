<?php

$pessoa = new class(){
    public $nome = "matheus";

    public function dizerNome(){
        echo "Olá eu sou $this->nome";
    }
};

echo "$pessoa->nome <br>";

$pessoa->dizerNome();

?>