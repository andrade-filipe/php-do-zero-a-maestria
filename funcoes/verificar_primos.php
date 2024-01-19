<?php

    function isPrime($number){
        if($number < 2){
            return false;
        }

        $i = 2;

        while($i < $number){

            if($number % $i == 0){
                return false;
            }

            $i++;
        }

        return true;
    }