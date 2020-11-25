<?php

require('../engine/db/db.php');
require('../engine/db/sql_prod_img.php');
require('../engine/helpers/helper.php');

$id = (int) array_get($_GET, 'id');
$imageId = getImageById ($id); 
updateViewsImage ($id);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   $post = array_clean($_POST);
   $review = implode(',', $post);
// НЕ ОТПРАВЛЯЕМ ПУСТОЙ ОТЗЫВ
   if($review !== '') {
      insertIntoReviewTable($id, $review);
   }
  
}

$text = reviewText($id);

// redirect($_SERVER['REQUEST_URI']);

include('../views/single_photo.php');

?>

