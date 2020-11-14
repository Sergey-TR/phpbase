<?php

require ('db.php');
/**
 * функция вывода всех элементов массива на страницу
 * на выходе асоциативный массив отсортированный по рейтингу просмотров
 */
if(!function_exists('getProductImages')) {
    function getProductImages () {  
        return queryAll("SELECT * FROM product_img ORDER BY views desc");
    }
}
/**
 * функция вывода одной фотографии по id
 * на входе id из get запроса фотографии
 * на выходе строка отобранная по id запроса
 */
if(!function_exists('getImageById')) {
    function getImageById (int $id) {
        return queryOne("SELECT * FROM product_img WHERE id = {$id}");
    }
}

/**
 * функция увеличивает количество просмотра фотографии
 * на вход получает id фото
 * на выходе отдает обновленную колонку views
 */
if(!function_exists('updateViewsImage')) {
    function updateViewsImage (int $id) {
    return execute("UPDATE product_img SET views = views + 1 WHERE id = {$id}");
    }
}
?>