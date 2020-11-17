<?php

require_once (ROOT_DIR .'/engine/db/db.php');

require(ROOT_DIR .'/engine/db/sql_prod_img.php');

$productImg = getProductImages (); 

$browseWomen = ['Dresses', 'Tops', 'Sweaters/Knits', 'Jackets/Coats', 'Blazers', 'Denim', 
'Leggings/Pants', 'Skirts/Shorts', 'Accessories' ];
$browseMen = ['Tees/Tank tops', 'Shirts/Polos', 'Sweaters', 'Sweatshirts/Hoodies', 'Blazers', 'Jackets/vests'];

$navMenu = [
    'Home' => [],
    'Man' => [],
    'Women' => ['Dresses', 'Tops', 'Sweaters/Knits', 'Jackets/Coats', 'Blazers', 'Denim', 
                'Leggings/Pants', 'Skirts/Shorts', 'Accessories'],
    'Kids' => [],
    'Accoseriese' => [],
    'Featured' => [],
    'Hot Deals' => []
];

include(VIEW_DIR . 'catalog-view.php');
