<?php

if(!function_exists('calculator')) {
    function calculator ( $a,  $b,  $operation) {
        switch ($operation) {
            case "+":
                $result = $a + $b;
            break;
            case "-":
                $result = $a - $b;
            break;
            case "*":
                $result = $a * $b;
            break;
            case "/":
                 if ($b === (float)0 || $b === null) {
                     $result = 'учи математику, на 0 делить нельзя';
                 break;
                 }
                 else {
                    $result = $a / $b;
                 }
            break;
        }

        return  $a . ' ' . $operation . ' ' . $b . ' = ' . $result;
    }
}

?>