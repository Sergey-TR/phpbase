<?php
	$post = isset($post) ? $post : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="layout/style.css" type="text/css"/>
</head>
<body>
	
</body>
</html>
<form method="post" action="<?= isset($action) ? $action : '' ?>" style="max-width: 250px; margin: 0 auto; margin-top: 40px;">
	<input type="hidden" name="csrf_token" value="dsfhjksdfjksjgfdmlhgkjd">
	<div class="form-group">
		<label for="login" class="label_form">Логин</label>
		<!-- required -->
		<input type="text" class="my_account_check" name="login" placeholder="Логин" value="<?= array_get($post, 'basket') ?>">
		<?php if(isset($errors['login'])): ?>
		<i class="text-danger fv-error"><?= implode('<br>', (array)$errors['login']) ?></i>
		<?php endif ?>	
	</div>
	<div class="form-group">
		<label for="password" class="label_form">Пароль</label>
		<input type="password" class="my_account_check" name="password" placeholder="Пароль">
		<?php if(isset($errors['password'])): ?>
		<i class="text-danger fv-error"><?= implode('<br>', (array)$errors['password']) ?></i>
		<?php endif ?>
	</div>
	<div class="form-group">
		<label for="password_repeat" class="label_form" style="padding-left: 70px;;">Повтор пароля</label>
		<input type="password" class="my_account_check" name="password_repeat" placeholder="Повтор пароля">
		<?php if(isset($errors['password_repeat'])): ?>
		<i class="text-danger fv-error"><?= implode('<br>', (array)$errors['password_repeat']) ?></i>
		<?php endif ?>
	</div>
	<div class="form-group">
		<label for="email" class="label_form" style="padding-left: 50px;">Электронная почта</label>
		<input type="email" class="my_account_check" name="email" placeholder="Электронная почта"  value="<?= array_get($post, 'email') ?>">
		<?php if(isset($errors['email'])): ?>
		<i class="text-danger fv-error"><?= implode('<br>', (array)$errors['email']) ?></i>
		<?php endif ?>	
	</div>
	<button type="submit" class="my_account_check">Отправить</button>
	<p>* После регистрации, для входа на сайт, перйдите на страницу "LOG IN", потому что не редиректица что-то</p>
	<a href="/login" class="my_account_check">LOG IN</a>
</form>