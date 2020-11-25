<?php
/**
 * функция подключения к БД
 * при подключении использую статическую переменную
 * делаю проверку, если нет подключения, то подключаемся
 * сделал для того чтобы постоянно не подключаться и отключаться
 */
if(!function_exists('getConnect')) {
    function getConnect () {
        $config = include('../config/db_connect/connect.php');

       static $connection = null;
       if (is_null($connection)) {

       $connection = mysqli_connect(
            $config['host'], 
            $config['user'], 
            $config['pass'], 
            $config['db'], 
            $config['port']);
       }  
         
        return $connection;
    }
}
$connect = getConnect();
//$charset = mysqli_character_set_name(getConnect());
//printf ("Текущая кодировка - %s\n",$charset);
mysqli_set_charset(getConnect(), "utf8");
/**
 * функция когда в ответе одна строка
 * на вход получает строку sql запроса на выборку по всей таблице "product_img"
 * на выходе одна строка отсортированная по id
 */
if(!function_exists('queryOne')) {
    function queryOne (string $sql) {
        return queryAll($sql)[0];
    }
}
/**
 * функция обычный селект из БД
 * на вход получает строку sql запроса на выборку по всей таблице "product_img"
 * на выходе асоциативный массив всей таблицы
 */
if(!function_exists('queryAll')) {
    function queryAll (string $sql) {

        $result = mysqli_query(getConnect(), $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
}
/**
 * функция выполнение запроса без выборки
 * на входе строка sql запроса на редактирование колонки views
 * mysqli_affected_rows — Получает число строк, затронутых предыдущей 
 * операцией MySQL
 * Возвращает число строк, затронутых последним запросом UPDATE
 */
if(!function_exists('execute')) {
    function execute (string $sql): int {

        $result = mysqli_query(getConnect(), $sql);
        return mysqli_affected_rows (getConnect());
    }
}

if(!function_exists('dbEscape')) {

	function dbEscape ($val){

        $connect = $GLOBALS['connect'];

		return mysqli_real_escape_string($connect, htmlspecialchars(strip_tags((string)$val)));
	}
}

if(!function_exists('dbQuery')) {

	function dbQuery (string $sql){

		$connect = $GLOBALS['connect'];

		$res = mysqli_query($connect, $sql);

		if(!$res){
			writeLog(mysqli_error($connect) . ' in (' . $sql . ')');
			return null;
		}

        return $res;
        
	}
}

if(!function_exists('dbGetRow')) {

	function dbGetRow(string $sql): array {

		$connect = $GLOBALS['connect'];

		$res = mysqli_query($connect, $sql);

		if(!$res){
			writeLog(mysqli_error($connect) . ' in (' . $sql . ')');
			return [];
		}

		$data = mysqli_fetch_assoc ($res);

		return $data ?: [];
	}

}

?>