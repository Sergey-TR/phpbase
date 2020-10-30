<?php

/**Написать функцию, которая вычисляет текущее время и возвращает 
его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.*/

$h = date("H");
$m = date("i");

function getHour ($num) {
    $num = (string)$num;
    if ($num == 1 || $num == 21) {
        return ' час';
    }
    $arr = array(0, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
    foreach ($arr as $hour) {
        if ($num == $hour) {
            return ' часов';
        }
    }
    $lastNumHour = $num[strlen($num)- 1];
    $lastNumHour = (int)$lastNumHour;
    switch($lastNumHour) {
        case 2:
        case 3:
        case 4:
            return ' часа';
    }
    
}

function getMinute ($num) {
    $num = (string)$num;
    $minuteLength = strlen($num);
    if ($minuteLength == 1 && $num == 1) {
        return ' минута';
    }
    $firstNum = getFirstNum ($num);
    if ($firstNum == 1) {
        return ' минут.';
    }
    $lastNum = $num[strlen($num)- 1];
    $lastNum = (int)$lastNum;
    switch ($lastNum) {
        case 0:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            return ' минут.';
        case 1:
            return ' минута.';
        case 2:
        case 3:
        case 4:
            return ' минуты.';
    }

}

function getFirstNum ($num) {
    $oneNum = $num[strlen($num) - 2];
    $oneNum = (int)$oneNum;
    return $oneNum;
}

echo $h . getHour ($h) . " " . $m . getMinute ($m);

?>