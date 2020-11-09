<?php 

require(HELPERS_DIR . 'task_2.php');
 
?>
           
       <!-- ЭТО ЗАДАНИЕ 2, 3 -->
       <!-- ДЛЯ ТОГО ЧТОБЫ ОТРАБОТАЛО МОДАЛЬНОЕ ОКНО, НУЖНО В ФАЙЛЕ header.php ОТКЛЮЧИТЬ КОММЕНТАРИИ
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/modal.js"></script>
      -->

          <div class="product-box center">
               <?php foreach (getImage(IMG_DIR) as $image) { ?>
               <div class="product">
                         <a href="<?= $image ?>" target="_blank"><img class="product__img" src="<?= $image ?>" alt="photo"></a>
                    <div class="product__content">
                         <a href="#" class="product__name">Mango People T-shirt</a>
                         <p class="product__price">$52.00<img class="product__star" src="https://raw.githubusercontent.com/Sergey-TR/images/main/star.png" alt="star"></p>
                    </div>
                    <a href="#" class="product__add"><img src="https://raw.githubusercontent.com/Sergey-TR/images/main/cartWhite.png" alt="">Add to Cart</a>
               </div>
               <?php } ?>
          </div>   
     </body>
</html>
       

       
	