<?php

//explode()
//Функция explode() служит для разбиения строки на части, причем разбиение идёт по определенному разделителю.
//explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ) : array
//возвращает массив строк переданных разделителем

$someString = 'какая то строка с бессмыленным текстом';

$varEx = explode(" ", $someString);

echo $varEx[0] . '<br>';
echo $varEx[1] . '<br>';
echo $varEx[2] . '<br>';
echo $varEx[3] . '<br>';
echo $varEx[4] . '<br>';
echo $varEx[5] . '<br>';
echo "<pre>";
print_r($varEx);
echo "</pre>";

//с limit

$varExLim = explode(" ", $someString, 3);
echo "<pre>";
print_r($varExLim);
echo "</pre>";

$varExLim = explode(" ", $someString, -3);
echo "<pre>";
print_r($varExLim);
echo "</pre>";

//implode()
//implode — Объединяет элементы массива в строку
//implode ( string $glue , array $pieces ) : string
//Возвращает строку, содержащую строковое представление всех элементов массива 
//в указанном порядке, со строкой glue между каждым элементом.

$varImplode = implode("_", $varEx);
echo $varImplode;

//$_ENV — Переменные окружения

//вывел массив со всякой всячиной, т.е. переменные окружения
$loc = getenv();
echo "<pre>";
print_r($loc);
echo "</pre>";
$name = getenv('USERNAME');
echo $name . '<br>';

//а вот здесь почему-то не хочет выводить USERNAME

echo 'Мое имя пользователя: ' . $_ENV['USERNAME'] . '!';

//!!!!!!! ВОПРОС: ДЛЯ ЧЕГО ЭТО В ПРАКТИЧЕСКОМ ПЛАНЕ?

?>