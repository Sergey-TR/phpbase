<?php

require_once (ROOT_DIR .'/engine/db/db.php');

require(ROOT_DIR .'/engine/db/sql_prod_img.php');

$productImg = getProductImages (); 
//var_dump($productImg);

if(!empty($_SESSION['basket'])) {
    $itemCartIds = array_keys($_SESSION['basket']);
   
    $itemCarts = getProductImages($itemCartIds);
    foreach($itemCarts as $cartInfo) {
        $totalCart += $_SESSION['basket'][$cartInfo['id']];
    }
}
$title = 'КАТАЛОГ';

$content = view('catalog-view', ['productImg' => getProductImages ()]);//['post' => $post, 'errors' => $errors]);
//var_dump($content);
require (VIEW_DIR . 'layout.php'); 
//include(VIEW_DIR . 'catalog-view.php');
