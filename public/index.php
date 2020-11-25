<?php
define('ROOT_DIR', __DIR__ . '/../');
define('VIEW_DIR', ROOT_DIR . 'views/');
define('ENGINE_DIR', ROOT_DIR . 'engine/');
define('CONFIG_DIR', ROOT_DIR . 'config/');
define('ACTION_DIR', ENGINE_DIR . 'action/');
define('HELPERS_DIR', ENGINE_DIR . 'helpers/');

require('../engine/db/db.php');
require('../engine/db/sql_prod_img.php');
require('../engine/helpers/helper.php');

session_set_cookie_params(60 * 60 * 24, '/', array_get($_SERVER, 'HTTP_HOST'), false, true);
session_start();

if(array_get($_COOKIE, 'auth_key')) {

	$user = dbGetRow(sprintf("select * from users where auth_key = '%s'", dbEscape($_COOKIE['auth_key'])));	

	if($user) {
		$_SESSION['user'] = $user;
		
	}
}

require ROOT_DIR . '/engine/helpers/helper.php';

$uriArr = array_values(array_filter(explode('/', explode('?',$_SERVER['REQUEST_URI'])[0]) , fn($it) => boolval($it))) ;

$currentAction = array_get($uriArr, 0, 'home');

$actionPath = ROOT_DIR .'engine/action/'. $currentAction;

if(is_dir($actionPath)) {

	$fileName = array_get($uriArr, 1, $currentAction);
	
	$actionPath .= '/' . $fileName;
}

$filePath = $actionPath .'.php';

if(!file_exists($filePath)){
	abort(404);
}

require($filePath);
?>
