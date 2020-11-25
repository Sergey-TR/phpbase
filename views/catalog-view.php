<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="layout/style.css" type="text/css"/>
    <script src="https://kit.fontawesome.com/b56179660f.js" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/modal.js"></script> -->
</head>
<body>
     
     <div class="itemHeading">
          <h2 class="fetured">Fetured Items</h2>
          <p class="fetured_p">Shop for items based on what we featured in this week</p>
     </div>
     <div class="product-box center">
     <?php foreach ($productImg as $image) { 
		  $imgUrl = "/img/{$image['route']}";  ?>
		  
          <div class="product">
                   
               <a href="/item_photo?id=<?= $image['id'] ?>">
                         
               <img class="product__img" src="<?= $imgUrl ?>" 
               alt="photo"></a>
          <div class="product__content">
               <a href="#" class="product__name"><?= $image['title'] ?></a>
               <p class="product__price">$<?= $image['price'] ?><img class="product__star" 
                    src="https://raw.githubusercontent.com/Sergey-TR/images/main/star.png" 
                    alt="star">
               </p>
		  </div>
          <!-- <a href="#" class="product__add">
               <img src="https://raw.githubusercontent.com/Sergey-TR/images/main/cartWhite.png" alt="">
               Add to Cart
		  </a> -->
		  <form class="form__add" method="POST" action="/addBasket" class="" style="position: absolute; top: 97px; left: 70px;">
		 <input type="hidden" value="<?= $image['id'] ?>" name="id">
		 <input type="hidden" value="1" name="quantity">
		 <img src="https://raw.githubusercontent.com/Sergey-TR/images/main/cartWhite.png" alt=""> 
		 <input class="product__add" type="submit" value="Add to Cart">
		  </form>
		  </div>
		  
     <?php } ?>
     </div>   
</body>
</html>
    
       
