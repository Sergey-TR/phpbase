
<div class="product-box center">
     <?php foreach ($productImg as $image) { 
          $imgUrl = "/img/{$image['route']}";  ?>
          <div class="product">
                   
               <a href="/photo.php?id=<?= $image['id'] ?>">
                         
               <img class="product__img" src="<?= $imgUrl ?>" 
               alt="photo"></a>
          <div class="product__content">
               <a href="#" class="product__name"><?= $image['title'] ?></a>
               <p class="product__price">$52.00<img class="product__star" 
                    src="https://raw.githubusercontent.com/Sergey-TR/images/main/star.png" 
                    alt="star">
               </p>
          </div>
          <a href="#" class="product__add">
               <img src="https://raw.githubusercontent.com/Sergey-TR/images/main/cartWhite.png" alt="">
               Add to Cart
          </a>
          </div>
     <?php } ?>
</div>   
    
       
