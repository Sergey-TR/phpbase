<?php
define('ROOT_DIR', __DIR__ . '/../');
define('VIEW_DIR', ROOT_DIR . 'views/');
define('ENGINE_DIR', ROOT_DIR . 'engine/');
define('CONFIG_DIR', ROOT_DIR . 'config/');
define('ACTION_DIR', ENGINE_DIR . 'action/');
define('HELPERS_DIR', ENGINE_DIR . 'helpers/');

require(VIEW_DIR . 'header.php');
require(VIEW_DIR . 'nav.php');
require(HELPERS_DIR . 'db/items.php');

// это все таже попытка перенести item_photo в helpers/db
//require(HELPERS_DIR . 'db/item_photo.php');

?>
