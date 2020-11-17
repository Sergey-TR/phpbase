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
/**
 * функция записывает отзывы в таблицу с отзывами в БД
 * @param int $id - фото к которому делается отзыв и которое просматривается с описанием 
 *            переданный методом "GET"
 * @param string $review - отзыв написанный пользователем, переданный методом "POST"
 * @param $sql - sql запрос на внесение данных в БД
 * @return execute функция возвращает данные без выборки
 */
if(!function_exists('insertIntoReviewTable')) {
    function insertIntoReviewTable (int $id,  $review) {
        $sql = "INSERT INTO review (id_product, body) VALUES ('{$id}', '{$review}' )";
        return execute ($sql);
    }
}
/**
 * функция возвращает id отзыва, отзыв к просматриваемуему товару без пустых отзывов
 * @param int $id - фото к которому делается отзыв и которое просматривается с описанием
 *              переданный методом "GET"
 * @param $sql - sql запрос на получение из БД выборки отзывов
 * @return queryAll функция возвращает данные с выборкой по всей таблице
 */
if(!function_exists('reviewText')) {
    function reviewText (int $id) {
        return queryAll("SELECT * FROM review WHERE id_product = '{$id}' AND body !=''" );
    }
}
?>