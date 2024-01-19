<?php
    function countVowels($string){

        $strArr = str_split($string);
        $vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
        $counter = 0;

        foreach ($strArr as $letter) {
            if(in_array($letter, $vowels)){
                $counter++;
            }
        }

        return $counter;
    }