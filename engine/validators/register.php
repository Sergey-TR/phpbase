<?php

$currentValidator = array_merge( require __DIR__ . '/validator.php', [
	'rules' => [
		'login' => 'required',
		'email' => ['required', 'email'],
		'password' => 'required',
		'password_repeat' => ['required', 'repeat'],
	],
]);
// echo "<pre>";
// var_dump($currentValidator);
// echo "</pre>";
$currentValidator['ruleTypes']['repeat'] = fn($data, $key) => array_get($data, $key) === array_get($data, 'password');
$currentValidator['ruleMessages']['repeat'] = 'Пароли должны совпадать';

return $currentValidator;