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
     <header>
		<div class="header center">
			<div class="header__left">
				<a class="logo" href="#">
					<img class="logo__img" src="https://raw.githubusercontent.com/Sergey-TR/testkraken/master/project/img/logo.png" alt="logo">BRAN<span class="logoD">D</span>
				</a>
					<div class="browse">
					<details class="browse_det">
						<summary class="browse_det_sum">Browse</summary>
						<div class="browse_drop_menu">
						<h3 class="browse__h3">Women</h3>
						<ul class="browse_ul">
                            <?php foreach ($browseWomen as $shirtWomen) { ?>
                                <li><a href="#" class="browse_a"><?= $shirtWomen ?></a></li>
                            <?php } ?>
						</ul>
						<h3 class="browse__h3">men</h3>
						<ul class="browse_ul">
                        <?php foreach ($browseMen as $shirtMen) { ?>
                                <li><a href="#" class="browse_a"><?= $shirtMen ?></a></li>
                            <?php } ?>
						</ul>
						</div>
					</details>
				</div>
                <form class="header__form" action="#">
					<input class="header__form__int" type="search" placeholder="Search for Item...">
					<button class="header__form__btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div class="header__right">
			<div class="header__right_cart">
				<div class="cart__total">
					<span class="cart__total_span">0</span>
					<button class="cart__total_btn"></button>
				</div>				
			</div>
				<div class="my_account_btn">
					<details class="my_account_det">
						<summary class="my_account_sum">My Account</summary>
						<div class="my_account_checkout">
								<basket ref="basket" />							
								<div class="my_account_total">
									<div class="total">TOTAL</div>
									<div class="total500"><span class="span_total">0</span></div>
								</div>
								<button class="my_account_check">Checkout</button>
								<button class="my_account_cart">Go to cart</button> 
						</div>
					</details>
				</div>
			</div>
		</div>
	</header>
     <nav>
    <div class="nav">
        <ul class="menu center">
            <?php foreach ($navMenu as $mainMenu => $nameMenu) { ?>
                <li class="menu__list"><a href="#" class="menu__link"><?= $mainMenu ?></a>
					<div class="drop">
                        <div class="drop_women_left">
	                        <ul class="drop__ul">
                                <?php foreach($nameMenu as $dropMenu) { ?>
                                    <li><a href="#" class="drop__a"><?= $dropMenu ?></a></li>
                                <?php }	?>
	                        </ul>
						</div>
					</div>	
                </li>
            <?php } ?>				
        </ul>
    </div>
     </nav>
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
          <a href="#" class="product__add">
               <img src="https://raw.githubusercontent.com/Sergey-TR/images/main/cartWhite.png" alt="">
               Add to Cart
          </a>
          </div>
     <?php } ?>
     </div>   
</body>
</html>
    
       
