<?php
require('../engine/db/db.php');
require('../engine/db/sql_prod_img.php');
require('../engine/helpers/helper.php');

$title = 'Вход';
$back = array_get($_GET, 'back', '/');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$post = array_clean($_POST);

	if(!array_get($post, 'login') || !array_get($post, 'password')){
		$errorMsg = 'Необходимо передать логин и пароль';
		$content = view('login_form', [
			'action' => '/login', 
			'errorMsg' => $errorMsg
		]);

		return require VIEW_DIR . 'layout.php';
	}

	$user = dbGetRow(sprintf("select * from users where login = '%s'", dbEscape($post['login'])));

	// var_dump(dbEscape($post['password']), password_hash($post['password'], PASSWORD_BCRYPT, ['salt' => 'dsff2311']), $user['password']);

	if(!$user || !password_verify( dbEscape($post['password']) , $user['password'] )  ){
		$content = view('login_form', [
			'action' => '/login', 
			'errorMsg' => 'Такой комбинации логин и пароль нет.'
		]);

		return require VIEW_DIR . 'layout.php';
	}

	$_SESSION['user'] = $user;

    //header('Location: http://' . $_SERVER['HTTP_HOST']. $back);
    header('Location: http://phpbase/catalog');
}



$content = view('login_form', [
	'action' => '/login/?back=' . $back, 
]);
require (VIEW_DIR . 'layout.php');