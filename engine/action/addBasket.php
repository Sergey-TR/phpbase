<?php

require('../engine/db/db.php');
require('../engine/db/sql_prod_img.php');
require('../engine/helpers/helper.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemCart = array_clean($_POST);
    //var_dump($itemCart);
    $itemCartId = $itemCart['id'];
    $itemCartQuantity = $itemCart['quantity'];

    //session_start();

    if(isset($_SESSION['basket'][$itemCartId])) {
        
        $_SESSION['basket'][$itemCartId] += $itemCartQuantity;
    } else {
        $_SESSION['basket'][$itemCartId] = $itemCartQuantity;
    }
}

header ('Location: http://phpbase/catalog');
?>