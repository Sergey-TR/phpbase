<?php

require('../engine/db/db.php');
require('../engine/db/sql_prod_img.php');
require('../engine/helpers/helper.php');
//require('catalog.php');

//session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $change = array_clean($_POST);
     
    if(array_key_exists('plus', $change)) {
        $idChange = $change['plus'];
        $_SESSION['basket'][$idChange] += 1;
    } else {
        $idChange = $change['minus'];
        $_SESSION['basket'][$idChange] -= 1;
        if($_SESSION['basket'][$idChange] == 0) {
            unset($_SESSION['basket'][$idChange]);
            header('Location: http://phpbase/basket');
        }
    }
}  
//var_dump($_SESSION['basket']);
//session_start();  
$basket = [];
if(!empty($_SESSION['basket'])) {
    
    $itemCartIds = array_keys($_SESSION['basket']);
   
    $itemCarts = getProductImages($itemCartIds);
   
    foreach($itemCarts as $item) {
        $basket [] = [
            'product' => $item,
            'qty' => $_SESSION['basket'][$item['id']]
        ];
    }   
}

 require(VIEW_DIR . 'cart.php');
?>