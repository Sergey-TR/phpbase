<?php
$browseWomen = ['Dresses', 'Tops', 'Sweaters/Knits', 'Jackets/Coats', 'Blazers', 'Denim', 
'Leggings/Pants', 'Skirts/Shorts', 'Accessories' ];
$browseMen = ['Tees/Tank tops', 'Shirts/Polos', 'Sweaters', 'Sweatshirts/Hoodies', 'Blazers', 'Jackets/vests'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="/style.css" type="text/css"/>
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