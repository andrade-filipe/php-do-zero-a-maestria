<?php

class Visibilidade {

    public $variavel1 = "Posso acessar diretamente ";
    protected $variavel2 = "Posso Acessar pela classe e pelas filhas dela";
    private $variavel3;

    public function varPrivate(){
        $this->variavel3 = "Posso acessar somente pela classe";
        return $this->variavel3;
    }
}

class Heranca extends Visibilidade {
    public function varProtected(){
        return $this->variavel2;
    }
}

$objeto = new Visibilidade;

$objeto = $objeto->varPrivate();

echo $objeto;
echo "<br>";

$objeto2 = new Visibilidade;

echo $objeto2->variavel1;
echo "<br>";

$objeto3 = new Heranca;

echo $objeto3->varProtected();
echo "<br>";

?>