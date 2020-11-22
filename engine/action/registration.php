
<?php
require_once (ROOT_DIR .'/engine/db/db.php');

require(ROOT_DIR .'/engine/db/sql_prod_img.php');
$validator = require (ROOT_DIR .'/engine/validators/register.php');

$post = $errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$post = array_clean($_POST);
	
	$errors = $validator['validate']($post);

	if(!$errors){
		
		$res = dbQuery("INSERT INTO `users`(`login`, `password`, `email`) 
			VALUES ('". dbEscape($post['login']) ."', '". password_hash($post['password'], PASSWORD_BCRYPT) ."','". dbEscape($post['email']) ."');");

		if(!$res) {
			var_dump('Error');
			die;
		}
// ПОЧЕМУ ЗДЕСЬ НЕ ДЕЛАЕТСЯ РЕДИРЕКТ НА КОРЗИНУ, ПИШЕТ
//Cannot modify header information - headers already sent by 
//(output started at C:\Users\Sergey\Documents\OpenServer\domains\phpbase\engine\action\registration.php:1) 
//in C:\Users\Sergey\Documents\OpenServer\domains\phpbase\engine\action\registration.php on line 26
		header('Location: http://phpbase/basket');
	}
	
}

$title = 'Регистрация';
//$content = view('registration_form');//, ['post' => $post, 'errors' => $errors]);

require VIEW_DIR . 'registration_form.php';

//require(VIEW_DIR . 'registration_form.php')
?>