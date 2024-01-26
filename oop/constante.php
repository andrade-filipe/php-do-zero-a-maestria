<?php

    class Constante{

        public const CHAVE_API = "1F2J3H4J4JN3J34K34";

        function mostrarConstante(){
            echo self::CHAVE_API;
        }
    }

    $constante = new Constante;

    echo $constante::CHAVE_API;

?>