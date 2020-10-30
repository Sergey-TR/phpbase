<?php

/*Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return.*/


function multiplications ($a , $b) {
    return $a * $b;    
}

function division ($a , $b) {
    return $a / $b;
}

function addition ($a , $b) {
    return $a + $b;
}

function subtraction ($a , $b) {
    return $a - $b;
}

$multiplication = multiplications(10, 2);
echo $multiplication;
echo '<br>';
$division = division(10, 2);
echo $division;
echo '<br>';
$addition = addition(10, 2);
echo $addition;
echo '<br>';
$subtraction = subtraction(10, 2);
echo $subtraction;

?>