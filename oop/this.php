<?php

    class TestandoThis{

        public $propriedade = "propriedade";

        function teste(){
            echo $this->propriedade;
        }
    }

    $testandoThis = new TestandoThis;

    $testandoThis->teste();

?>