<?php

class Humano {
    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}

    public function andar(){}
}

if(class_exists("Humano")){
    echo "A classe Existe <br>";
}

print_r(get_class_vars("Humano"));
echo "<br>";

print_r(get_class_methods("Humano"));
echo "<br>";

$objeto = new Humano;

if(is_object($objeto)){
    echo "É objeto <br>";
}

echo get_class($objeto);
echo "<br>";

if(method_exists($objeto, "falar")){
    echo "Método Existe";
}
?>