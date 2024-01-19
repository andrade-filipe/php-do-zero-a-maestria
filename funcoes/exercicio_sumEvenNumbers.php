<?php

    function sumEvenNumbers($number){
        $i = 0;
        $sum = 0;

        while($i <= $number){

            if($i % 2 == 0){
                $sum += $i;
            }

            $i++;
        }

        return $sum;
    }