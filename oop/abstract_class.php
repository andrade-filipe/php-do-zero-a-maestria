<?php

abstract class Teste{
    public static function testandoClasse(){
        echo "Este Método é da classe abstrata <br>";
    }

    abstract public function testeAbs();
}

class Carro extends Teste {
    public function testeAbs(){
        echo "Esse método é abstrato";
    }
}

Teste::testandoClasse();

$carro = new Carro;

echo $carro->testeAbs();

?>