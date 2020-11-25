<?php

require(ROOT_DIR . '/engine/calk-action.php');

/* В ПЕРВОМ И ВТОРОМ ISSET, ВСЕ ЧТО Я ПИШУ В ИНПУТАХ ПРИВОДИТСЯ К float, иначе 0, НУ КРОМЕ ЦИФР КОНЕЧНО,
    Т.Е. ЗДЕСЬ ЗАЩИТУ ОТ ДУРАКА ДЕЛАТЬ НЕ НАДО?
   */
  if(isset($_POST ['a']) ? $_POST ['a'] : 0){
    $a = (float) $_POST ['a'];  
}
if(isset($_POST ['b'])? $_POST ['a'] : 0 ) {
    $b = (float) $_POST ['b'];
}

/* А ВОТ ТУТ МОЖНО В ОТЛАДЧИКЕ ПОМЕНЯТЬ ЗНАЧЕНИЕ, Т.Е. ЗДЕСЬ НАДО ДЕЛАТЬ ЗАЩИТУ ОТ ДУРАКА,
   ЗРАЧЕНИЕ ОДИН ФИГ МЕНЯЕТСЯ, НО ВВЕДЕННЫЙ СКРИПТ НЕ ОТРАБАТЫВАЕТ*/

if(isset($_POST['operation']) ? $_POST['operation'] : 'operation not selected') {
    $operation = strip_tags($_POST['operation']); //(string) $_POST['operation'];
}

$total = calculator ($a, $b, $operation);

require('../views/calk-form.php');
?>