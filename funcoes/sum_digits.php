<?php

    function sumDigits($number){
        $strNum = strval($number);
        $digits = str_split($strNum);
        $sum = 0;

        foreach ($digits as $digit) {
            $sum += $digit;
        }

        return $sum;
    }