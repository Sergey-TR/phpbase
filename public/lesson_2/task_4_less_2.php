<?php

/*Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических 
операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

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

function mathOperation ($arg1, $arg2, $operation) {
    switch($operation) {
        case '*':
            return multiplications($arg1, $arg2);
        case '/':
            return division($arg1, $arg2);
        case '+':
            return addition($arg1, $arg2);
        case '-':
            return subtraction($arg1, $arg2);
        default:
            var_dump('error, this operation is not provided');

    }
}

var_dump(mathOperation(10, 2, '*'));
echo '<br>';
var_dump(mathOperation(10, 2, '/'));
echo '<br>';
var_dump(mathOperation(10, 2, '+'));
echo '<br>';
var_dump(mathOperation(10, 2, '-'));
echo '<br>';
var_dump(mathOperation(10, 2, '='));


?>