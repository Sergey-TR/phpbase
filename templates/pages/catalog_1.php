<?php 

require(HELPERS_DIR . 'task_1.php');
 
?>


<!-- ЭТО ЗАДАНИЕ 1 -->

        <div class="product-box center">

            <?php for ($i = 0; $i < count($files); $i++) {
                    if (($files[$i] != ".") && ($files[$i] != "..")) { 
                        $path = $dir . $files[$i];
                        //var_dump($path);
                         ?>
                <div class="product">
                    <a href="<?= $path ?>" target="_blank"><img class="product__img" src="<?= $path ?>" alt="photo"></a>
			        <div class="product__content">
				        <a href="#" class="product__name">Mango People T-shirt</a>
				        <p class="product__price">$52.00<img class="product__star" src="https://raw.githubusercontent.com/Sergey-TR/images/main/star.png" alt="star"></p>
			        </div>
			        <a href="#" class="product__add"><img src="https://raw.githubusercontent.com/Sergey-TR/images/main/cartWhite.png" alt="">Add to Cart</a>
                </div>
                <?php } ?>
            <?php } ?>
       </div>   
    </body>
</html>