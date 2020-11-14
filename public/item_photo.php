<?php

/* ПО ХОДУ РЕВРАЙТ ВСЕ ТАКИ НЕ РАБОТАЕТ, ЕСЛИ ПЕРЕНОШУ В HELPERS/db  ВЫДАЕТ 404 NOT FOUND NGINX.
   ЛИБО Я ЧТО ТО С ПУТЯМИ ПУТАЮ, ПОТОМУ ЧТО ОТСЮДА ПО require(HELPERS . 'db/db.php') и по
   другим ссылкам рисует нет такого пути
   в catalog.php так же меняю ссылку с /item_photo.php?id= на /engine/helpers/db/item_photo.php*/

require('../engine/helpers/db/db.php');
require('../engine/helpers/db/sql_prod_img.php');
require('../engine/helpers/isset.php');

$id = (int) array_get($_GET, 'id');

$imageId = getImageById ($id); 
updateViewsImage ($id);

include('../views/single_photo.php');

?>

