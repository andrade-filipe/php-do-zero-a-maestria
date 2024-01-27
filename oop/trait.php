<?php

trait Objeto {
    public function teste(){
        echo "testando trait <br>";
    }
}

class Central {
    use Objeto;
}

$var = new Central;

$var->teste();

?>