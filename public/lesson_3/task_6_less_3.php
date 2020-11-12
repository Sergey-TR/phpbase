<?php 

/*В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
  Необходимо представить пункты меню как элементы массива и вывести их циклом. 
  Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.*/


$menu = array (
    'DROP MENU' => array('DROP_1', 'DROP_2', 'DROP_3', 'DROP_4', 'DROP_5'),
    'MENU_1' => array(), 
    'MENU_2' => array(), 
    'MENU_3' => array('DROP_1', 'DROP_2', 'DROP_3', 'DROP_4', 'DROP_5') , 
    'MENU_4' => array()
)

/* ЗАДАЧА РЕАЛИЗОВАНА, ПРОСТО МЕНЮ ВЫВЕСТИ FOREACH НЕ СЛОЖНО, А ВОТ С ВЫПАДАЮЩИМ ПРИШЛОСЬ МНОГО ПОСМОТРЕТЬ,
   ХОТЯ ТО ЧТО СДЕЛАЛ ПРИШЛО ПЕРВЫМ НА УМ.*/

/* !!!!! ВОПРОС: ПОДКЛЮЧАЛ СТИЛИ КАК ОБЫЧНО <link rel="stylesheet" href="style.css", СНАЧАЛА ВРОДЕ ВСЕ РАБОТАЛО,
        НО ПОТОМ ПЕРЕСТАЛО, В ОТЛАДЧИКЕ ДЕЛАЕШЬ ВСЕ НОРМ, А ЧЕРЕЗ ФАЙЛ НЕ ПОДКЛЮЧАЮТСЯ, VOT ZE FAK?*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        a {
    text-decoration: none;
}

.center {
    padding: 0 calc(50% - 570px);
}

.menu {
    list-style-type: none;
    height: 80px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: lightsteelblue;
}

.menu_list {
  position: relative;
}

.menu_list:hover {
    cursor: pointer;
}

.menu_list:active .drop {
  display: flex;
}

.drop {
    width: 200px;
    position: absolute;
    top: 50px;
    display: none;
}
    </style>
</head>
<body>
    <nav>
        <ul class="menu center">
            <?php foreach($menu as $mainMenu => $dropMenu) { ?>
                <li class="menu_list"><?= $mainMenu ?>
                <div class="drop">
                    <ul class="drop_menu">
                        <?php foreach($dropMenu as $value) { ?>
                        <li class="drop_list"><?= $value ?></li>                            
                        <?php } ?>
                    </ul>
                </div>
                    </li>
            <?php } ?>
        </ul>
    </nav>
</body>
</html>