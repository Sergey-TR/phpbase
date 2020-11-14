<?php

require ('db.php');
/**
 * 
 * 
 */
if(!function_exists('getProductImages')) {
    function getProductImages () {
        return queryAll("SELECT * FROM product_img ORDER BY views desc");
    }
}
/**
 * 
 */
if(!function_exists('getImageById')) {
    function getImageById (int $id) {
        return queryOne("SELECT * FROM product_img WHERE id = {$id}");
    }
}

/**
 * 
 */
if(!function_exists('updateViewsImage')) {
    function updateViewsImage (int $id) {
    return execute("UPDATE product_img SET views = views + 1 WHERE id = {$id}");
    }
}
?>