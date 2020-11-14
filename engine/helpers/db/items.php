<?php

require_once ('db.php');

require('sql_prod_img.php');

$productImg = getProductImages (); 

include(VIEW_DIR . 'catalog.php');
