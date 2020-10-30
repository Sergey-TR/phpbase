<?php
	$heading = 'ПРИДУМАЙТЕ ЧТО ОТПРАВИТЬ';
	$menu = array('Главная', 'Описание', 'Преимущества', 'Отзывы', 'Партнеры', 'Гарантии', 'FAQ');
	$question = 'ОСТАЛИСЬ ВОПРОСЫ?';
	$bell = 'заказать звонок';
	$self = 'А посылка доедет сама';
	$send = 'отправить посылку';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sendit</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
	<div class="first">
		<div class="image">
			<header class="header">
				<a href="#" class="header__a"></a>
                <input id="switcher" type="checkbox">
				<label class="open" for="switcher"><img src="img/Vector.png" alt="menu"></label>
				<nav class="nav">	
					<ul class="menu"> 

						<?php foreach ($menu as $name){ ?>						
						<li><a href="#" class="menu__list"><?php echo "{$name}"; ?></a></li>
						<?php } ?>
		
					</ul>
					<a href="#" class="nav-logo"><img src="img/logodrop.png" alt="logo"></a>
                <input id="switcher" type="checkbox">
				<label class="close" for="switcher"><img src="img/Vectordrop.png" alt="menu"></label>
				</nav>
				<form class="fidback" action="#">
					<h2 class="fidback__qestion"><?php echo "{$question}"; ?></h2>
					<input class="fidback__phone" placeholder="Ваш телефон" required><br>
					<button class="fidback__bell" type="submit"><?php echo "{$bell}"; ?></button><br>
					<label class="fidback__agree" for="personal"><input class="fidback__agree_inp" id="personal" type="checkbox">Я согласен на обработку персональных данных</label>			
				</form>
				<div class="social">
					<a href="#" class="social_contact"><img src="img/contact.png" alt="cont"></a>
					<a href="#" class="social_inst"><img src="img/inst.png" alt=""></a>
					<a href="#" class="social_fase"><img src="img/fase.png" alt=""></a>
				</div>
			</header>
		</div>
		<div class="content center">
			<div class="heading">
				<h1 class="heading__h1"><?php echo "{$heading}"; ?></h1>
			</div>
			<div class="self">
				<h2 class="self__h2"><?php echo "{$self}"; ?></h2>
			</div>
			<form class="form-send" action="#">
				<button class="form-send-btn" type="submit"><?php echo "{$send}"; ?></button>
			</form>
		</div>
	</div>