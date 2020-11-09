<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";

$title = 'КАТАЛОГ';

require (PAGES_DIR . 'header.php');
require (PAGES_DIR . 'nav.php');
require (PAGES_DIR . 'catalog_1.php');
//require (PAGES_DIR . 'catalog_2.php');



/* ВОТ С ЭТИМ ПОКА ТУГО, У МЕНЯ nginx ДОМЕН СМОТРИТ В ПАПКУ public, НО ФАЙЛ .htaccess НЕ РАБОТАЕТ, НАСКОЛЬКО Я ПОНЯЛ 
   ОН ТОЛЬКО ДЛЯ  APACHE, В ИНТЕРНЕТЕ ЧЕГО ТОЛЬКО НЕ ПИШУТ, Я НАШЕ ПРЕОБРАЗОВАТЕЛЬ КОДА С АПАЧА НА НДЖИНКС, 
   ВСТАВИЛ ЕГО В .htaccess, НО ЭТО НЕ РАБОТАЕТ. В ОБЩЕМ ВОПРОС КОТОРЫЙ Я ЗАДАВАЛ НА УРОКЕ ПОКА ДЛЯ МЕНЯ ОТКРЫТЫЙ
   ЕСЛИ РАЗБЛОКИРОВАТЬ КОД НИЖЕ, ОН С УДОВОЛЬСТВИЕМ ПОДКЛЮЧАЕТ engine/action/home.php, ЕСЛИ ВМЕСТО home  В КОДЕ
   ПРОПИСАТЬ index ОН ПОДКЛЮЧАЕТ ФАЙЛ 404.php. ЕСЛИ В СТРОКЕ ЗАПРОСА ЧТО ТО ПРОПИСАТЬ, НАПРИМЕР http://phpbase/home 
   ВЫДАЕТ ОШИБКУ 404 NOT FOUND И НИЖЕ nginx */

// $uri = explode('/', $_SERVER['REQUEST_URI']);

// //var_dump($uri);

// $action = isset($uri[1]) && $uri[1] ? $uri[1] : 'home';

//  // var_dump($action);

// $filePath = ENGINE_DIR .'action/'. $action .'.php';

// //var_dump($filePath);

// if(!file_exists($filePath)){
// 	http_response_code(404);
// 	require (PAGES_DIR . '404.php');
// 	exit;
// }

// require($filePath);
?>