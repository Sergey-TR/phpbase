<?php
define('ROOT_DIR', __DIR__ . '/../');
define('VIEW_DIR', ROOT_DIR . 'views/');
define('ENGINE_DIR', ROOT_DIR . 'engine/');
define('CONFIG_DIR', ROOT_DIR . 'config/');
define('ACTION_DIR', ENGINE_DIR . 'action/');
define('HELPERS_DIR', ENGINE_DIR . 'helpers/');
//var_dump(__DIR__);
//require('./views')
// $ph = include('\engine\helpers\image\image_item.php');
// var_dump($ph . "zzzzzz");
// die;
// $host = '127.0.0.1';
// $user = 'root';
// $pass = '13061972';
// $db = 'shop_php';
// $port = '3306';

// $connection = mysqli_connect($host, $user, $pass, $db, $port);

// // echo "<pre>";
// // print_r($connection);
// // echo "</pre>";

// // $sqlCreateTable = 'drop  table if exists product_img;
// //         create table product_img (
// // 	    id serial primary key,
// // 	    title varchar(255) not null,
// // 	    route varchar(255) not null,
// // 	    views int default 0
// //         )';
// // $res = mysqli_query($connection, $sqlCreateTable);
// //var_dump($res);

// // ВЫВОДИМ КАТАЛОГ

// $sql = "select * from product_img";
// $result = mysqli_query($connection, $sql);
// $productImg = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($productImg);
// echo "</pre";
// var_dump($_GET['id']);
// $id = (int) $_GET['id'];
// //var_dump($id);
// $sqlId = "select * from product_img where id = {$id}";
// //var_dump($sqlId);
// $resultId = mysqli_query($connection, $sqlId);
// $imageId = mysqli_fetch_all($resultId, MYSQLI_ASSOC)[0];
// // echo "<pre>";
// // var_dump($imageId['route']);
// // echo "</pre>";

require (VIEW_DIR . 'header.php');
 //require('../views/header.php');
 require(VIEW_DIR . 'nav.php');
 //require('./gallery.php');
 require(HELPERS_DIR . 'db/items.php');
 //require('./photo.php');
// require('../views/catalog.php');
// require('../views/photo.php');
//require('../engine/helpers/image/image_item.php');


?>
<!-- <img src="/img/<?= $imageId['route'] ?>" alt="">
<div style="display: flex; align-items: center; justify-content: center;">
<img src="<?= $imageId['id'] ?>" alt="">
</div> -->